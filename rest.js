window.onload = function () {
	let xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function (){
		if (this.readyState == 4 && this.status == 200) {
			myfunction(this.responseText);
		}
			
	}
	document.onclick = function (event) {
        event.stopPropagation();
		let target_id = event.target;
				console.log(target_id);
            if (event.target.classList.contains('cell')) {
				let target_id = event.target.id;
				console.log(target_id);
				// xhttp.open("POST", "server.py/test/${target_id}", true);
				// xhttp.send(target_id);
			}

}
	function myFunction(data) {
		console.log(data);
	}
}