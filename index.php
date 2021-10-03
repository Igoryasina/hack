

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"
	></script>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>BRAINER</title>
</head>
<body>
<script type="text/javascript">
	
	$("form").submit(function(event){
    event.preventDefault();});
</script>

<?php
#include 'war.php';
	$link_cells = mysqli_connect('localhost', 'root', '', 'hackaton');


	$query = "SELECT * FROM room_3x3 WHERE id=1";
	
	$result = $link_cells->query($query);

 $rowsCount = $result->num_rows; // количество полученных строк


$zapros= mysqli_query($link_cells,$query);

$num_rows=mysqli_num_rows($zapros);


$i=0;
while($num_rows=mysqli_fetch_assoc($zapros)){

for($j=1;$j<=36;$j++)
$cells[$j]=$num_rows['cell_'.$j];
$hod='"'.$num_rows['hod'].'"';
$team_blue[$i]='"'.$num_rows['first_team'].'"';
$team_red[$i]='"'.$num_rows['second_team'].'"';
$i++;


}

?>


<?php

	$link = mysqli_connect('localhost', 'root', '', 'hackaton');


	$query = "SELECT * FROM question";
	
	$result = $link->query($query);

 $rowsCount = $result->num_rows; // количество полученных строк

$random=rand(1,$rowsCount);

$zapros= mysqli_query($link,$query);

$num_rows=mysqli_num_rows($zapros);


$i=0;
while($num_rows=mysqli_fetch_assoc($zapros)){

$question[$i]='"'.$num_rows['question'].'"';
$answer[$i]='"'.$num_rows['answer'].'"';
$type[$i]='"'.$num_rows['type'].'"';
$i++;


}

?>

	<div class="header">
		<div>
			- BRAINER -
		</div>
		<div>
			<div class="time">9:31</div>
		</div>
	</div>
	<div class="flex_conteiner">
		<div class="logo">
			<div class="line"></div>
			<div>Uchi://Hack</div>
			<div class="line"></div>
		</div>

<div class="answ">
<form class="answer_form">
<p id="question"><b> Вопрос? </b></p>
<br>
<div class="simple">Выберите правильный ответ:</div>
<input type="radio" name="answers1" id="ans1" class="simple"><p class="simple" id="one">Первый ответ<br></p>
<input type="radio" name="answers2" id="ans2" class="simple"><p class="simple" id="two">Второй ответ<br></p>
<input type="radio" name="answers3" id="ans3" class="simple"><p class="simple" id="three">Третий ответ</p>
<input type="radio" name="answers4" id="ans4" class="simple"><p class="simple" id="four"> Четвертый ответ</p>
<p class="strong">Введите ответ</p>
<p class="strong"> <input class="butansw" type="text" name="answers5"></p>

<p ><input class="btn_sub" type="submit" id="answers_b" name="push"></p>

</form>

</div>

	<div class="background">
		<div class="img">
			
			<div class="three">

			<div class="cell" id="1">
				1
			 </div>
			 <div class="cell" id="2">
			2
			 </div>
			 <div class="cell" id="3">
			 3
			 </div>
			 </div>

			 <div class="six">

			  <div class="cell" id="4">
			 4
			 </div>
			  <div class="cell" id="5">
			 5
			 </div>
			  <div class="cell" id="6">
			 6
			 </div>
			  <div class="cell" id="7">
			 7
			 </div>
			 <div class="cell" id="8">
			 8
			 </div>
			 <div class="cell" id="9">
			9
			 </div>
			 </div>

			 <div class="seven">

			 <div class="cell" id="10">
			10
			 </div>
			 <div class="cell" id="11">
			 11
			 </div>
			  <div class="cell" id="12">
			 12
			 </div>
			  <div class="cell" id="13">
			13
			 </div>
			  <div class="cell" id="14">
			 15
			 </div>
			  <div class="cell" id="15">
			 15
			 </div>
			 <div class="cell" id="16">
			 16
			 </div>
			</div>

			<div class="six">

			 <div class="cell" id="17">
			 17
			 </div>
			 <div class="cell" id="18">
			 18
			 </div>
			 <div class="cell" id="19">
			 19
			 </div>
			  <div class="cell" id="20">
			 20
			 </div>
			  <div class="cell" id="21">
			 21
			 </div>
			  <div class="cell" id="22">
			 22
			 </div>

			</div>

			<div class="five">
				
			
			  <div class="cell" id="23">
			 23
			 </div>
			 <div class="cell" id="24">
			24
			 </div>

			 <div class="cell" id="25">
			 25
			 </div>
			  <div class="cell" id="26">
			26
			 </div>
			  <div class="cell" id="27">
			 27
			 </div>
			 </div>

			 <div class="six">
			  <div class="cell" id="28">
			28
			 </div>
			 <div class="cell" id="29">
			 29
			 </div>

			 <div class="cell" id="30">
			30
			 </div>
			  <div class="cell" id="31">
			32
			 </div>
			  <div class="cell" id="32">
			 32
			 </div>
			 <div class="cell" id="33">
			 33
			 </div>
			</div>

			<div class="three">
			  <div class="cell" id="34">
			 34
			 </div>
			  <div class="cell" id="35">
			 35
			 </div>
			  <div class="cell" id="36">
			 36
			 </div>
</div>
		</div>
		<div class="all_flags">
			<div class="flag_red">
			<svg width="129" height="104" viewBox="0 0 149 124" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5 0C5 0 68 30 77 15C86 9.53674e-07 149 0 149 0L108 37L149 72C149 72 77 47 77 62C77 77 5 55 5 55V0Z" fill="#EF516B"/>
<rect width="6" height="124" fill="#FFFEFE"/>
</svg>
		</div>
		<div class="flag_blue">
			<svg width="129" height="104" viewBox="0 0 149 124" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M144 0C144 0 81 30 72 15C63 9.53674e-07 0 0 0 0L41 37L0 72C0 72 72 47 72 62C72 77 144 55 144 55V0Z" fill="#77CBD8"/>
<rect width="6" height="124" transform="matrix(-1 0 0 1 149 0)" fill="#FFFEFE"/>
</svg>

		</div>
		</div>
		
	</div>
	<div class="the_participants">
		<div class="first_text">
				NAME TEAM
			</div>
		<div class="first_team">
			<div class="blockred_1" >
				<div>
			<svg width="64" height="49" viewBox="0 0 94 79" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M94 38.3587C94 59.5437 82.1973 78.8251 49.7399 78.8251C11.2725 78.8251 0 59.5437 0 38.3587C0 17.1738 28.555 0 49.7399 0C70.9249 0 94 17.1738 94 38.3587Z" fill="#FA8786"/>
<path d="M93.5785 40.4664C93.5785 56.9058 73.4292 53.1066 48.0538 53.1066C22.6784 53.1066 0 56.0628 0 44.2601C0 24.0269 22.6784 21.0707 48.0538 21.0707C73.4292 21.0707 93.5785 24.0269 93.5785 40.4664Z" fill="#EF516B"/>
<circle cx="27.8206" cy="42.574" r="5.47982" fill="white"/>
<circle cx="62.3857" cy="42.574" r="5.47982" fill="white"/>
</svg>
</div>
<div>
<span>name</span>
</div>
	</div>
	<div class="blockred_2" >
		<div>
			<svg width="64" height="49" viewBox="0 0 94 79" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M94 38.3587C94 59.5437 82.1973 78.8251 49.7399 78.8251C11.2725 78.8251 0 59.5437 0 38.3587C0 17.1738 28.555 0 49.7399 0C70.9249 0 94 17.1738 94 38.3587Z" fill="#FA8786"/>
<path d="M93.5785 40.4664C93.5785 56.9058 73.4292 53.1066 48.0538 53.1066C22.6784 53.1066 0 56.0628 0 44.2601C0 24.0269 22.6784 21.0707 48.0538 21.0707C73.4292 21.0707 93.5785 24.0269 93.5785 40.4664Z" fill="#EF516B"/>
<circle cx="27.8206" cy="42.574" r="5.47982" fill="white"/>
<circle cx="62.3857" cy="42.574" r="5.47982" fill="white"/>
</svg>
</div>
<div>
<span>name</span>
</div>
	</div>
	<div class="blockred_3" >
		<div>
			<svg width="64" height="49" viewBox="0 0 94 79" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M94 38.3587C94 59.5437 82.1973 78.8251 49.7399 78.8251C11.2725 78.8251 0 59.5437 0 38.3587C0 17.1738 28.555 0 49.7399 0C70.9249 0 94 17.1738 94 38.3587Z" fill="#FA8786"/>
<path d="M93.5785 40.4664C93.5785 56.9058 73.4292 53.1066 48.0538 53.1066C22.6784 53.1066 0 56.0628 0 44.2601C0 24.0269 22.6784 21.0707 48.0538 21.0707C73.4292 21.0707 93.5785 24.0269 93.5785 40.4664Z" fill="#EF516B"/>
<circle cx="27.8206" cy="42.574" r="5.47982" fill="white"/>
<circle cx="62.3857" cy="42.574" r="5.47982" fill="white"/>
</svg>
</div>
<div>
<span>name</span>
</div>
	</div>
		</div>
		<div class="second_text">
				NAME TEAM
			</div>
		<div class="second_team">
				<div class="block_1">
					<div>
			<svg width="64" height="49" viewBox="0 0 94 79" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M94 38.3611C94 59.5474 82.1973 78.83 49.7399 78.83C11.2725 78.83 0 59.5474 0 38.3611C0 17.1749 28.555 0 49.7399 0C70.9249 0 94 17.1749 94 38.3611Z" fill="#77CBD8"/>
<path d="M93.5785 40.4689C93.5785 56.9093 73.4292 53.1098 48.0538 53.1098C22.6784 53.1098 0 56.0662 0 44.2628C0 24.0283 22.6784 21.072 48.0538 21.072C73.4292 21.072 93.5785 24.0284 93.5785 40.4689Z" fill="#3B597F"/>
<ellipse cx="27.8206" cy="42.5766" rx="5.47982" ry="5.48016" fill="white"/>
<ellipse cx="62.3857" cy="42.5766" rx="5.47982" ry="5.48016" fill="white"/>
</svg>
</div>
<div>
<span>name</span>
</div>
	</div>
			<div class="block_2">
				<div>
				<svg width="64" height="49" viewBox="0 0 94 79" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M94 38.3611C94 59.5474 82.1973 78.83 49.7399 78.83C11.2725 78.83 0 59.5474 0 38.3611C0 17.1749 28.555 0 49.7399 0C70.9249 0 94 17.1749 94 38.3611Z" fill="#77CBD8"/>
<path d="M93.5785 40.4689C93.5785 56.9093 73.4292 53.1098 48.0538 53.1098C22.6784 53.1098 0 56.0662 0 44.2628C0 24.0283 22.6784 21.072 48.0538 21.072C73.4292 21.072 93.5785 24.0284 93.5785 40.4689Z" fill="#3B597F"/>
<ellipse cx="27.8206" cy="42.5766" rx="5.47982" ry="5.48016" fill="white"/>
<ellipse cx="62.3857" cy="42.5766" rx="5.47982" ry="5.48016" fill="white"/>
</svg>
</div>
<div>
<span>name</span>
</div>
			</div>
			<div class="block_3">
				<div>
				<svg width="64" height="49" viewBox="0 0 94 79" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M94 38.3611C94 59.5474 82.1973 78.83 49.7399 78.83C11.2725 78.83 0 59.5474 0 38.3611C0 17.1749 28.555 0 49.7399 0C70.9249 0 94 17.1749 94 38.3611Z" fill="#77CBD8"/>
<path d="M93.5785 40.4689C93.5785 56.9093 73.4292 53.1098 48.0538 53.1098C22.6784 53.1098 0 56.0662 0 44.2628C0 24.0283 22.6784 21.072 48.0538 21.072C73.4292 21.072 93.5785 24.0284 93.5785 40.4689Z" fill="#3B597F"/>
<ellipse cx="27.8206" cy="42.5766" rx="5.47982" ry="5.48016" fill="white"/>
<ellipse cx="62.3857" cy="42.5766" rx="5.47982" ry="5.48016" fill="white"/>
</svg>
</div>
<div>
<span>name</span>
</div>
			</div>
		</div>
	</div>
	</div>
	<br>
	<footer>
		<div class="contacts">
<div>
контакты
<div>

<p>teamit@hack.ru</p>
</div>
<div>
мы готовы на дальнейшее сотрудничество! :)
</div>

</div>
<div>
социальные сети
<div>
<img src="img/iconsemail.png" width="30px" height="30px" style="margin-top: 20px; margin-left: 45px;">
</div>
</div>
<div>
обратная связь
<div class="obr_sv" style="margin-top: 20px; margin-left: 9px;">
написать нам!
</div>
</div>
</div>
</footer>
<script src="rest.js"></script>

<script type="text/javascript">

	var cells=<?php echo json_encode($cells);?>;
for(var i=0;i<37;i++)
{
	$('#'+i).css('background-color', cells[i]);
	

}
	$(".cell").click(function() {
		var clickId = $(this).attr('id');


var question_variant; //0=simple 1=strong
var question = <?php  echo $question[$random]; ?>;
var hod = <?php  echo $hod; ?>;
var answer = <?php echo $answer[$random];?>;
var answer_win;
var type = <?php echo $type[$random];?>;"UPDATE room_3x3 SET 'cell_+$clickID' ='team'"
var answer_var=answer.split(",");

for(var i=0;i<4;i++){
for(var j=0;j<answer.length;j++)
	if(answer_var[i][j]=="+")
		answer_win=i;
}



$("#question").text(question);
$("#one").text(answer_var[0]);
	$("#two").text(answer_var[1]);
	$("#three").text(answer_var[2]);
	$("#four").text(answer_var[3]);

$(".answ").css('visibility', 'visible');
if(type=="simple")
{
	$(".simple").css('visibility', 'visible');
	question_variant=0;
	

}
else
	if(type=="strong")
{
	$(".strong").css('visibility', 'visible');
	question_variant=1;
}



	$("#answers_b").click(function() {

	answer_win++;
	if(document.getElementById('ans'+answer_win).checked)
	{

	if(hod=="red")
		{







	$.ajax({
		
		
	url: 'war.php', // скрипт который получит отправление
	method: "POST", // метод
	data: {clickId:clickId,
		team:"red"},
		complete: function() {},
	    statusCode: {
	        200: function(message) {
	            alert(message);
	        },
	        403: function(jqXHR) {
	            var error = JSON.parse(jqXHR.responseText);
	            $("body").prepend(error.message);
	    }}
	});

	hod="blue";
	}
	else
	{
		$.ajax({
		
		
	url: 'war.php', // скрипт который получит отправление
	method: "POST", // метод
	data: {clickId:clickId,team:"blue"},
	complete: function() {},
	    statusCode: {
	        200: function(message) {
	            alert(message);
	        },
	        403: function(jqXHR) {
	            var error = JSON.parse(jqXHR.responseText);
	            $("body").prepend(error.message);
	    }}
	});

	hod="red";
	}



		alert("Правильно");




	}
	else
	{
		if(hod=="blue")
		hod="red";
	else
		hod="blue"
	alert("Не Правильно");
	}

	});


	 });



</script>
<?php
if (isset($_POST['clickId'])) {
   $insert = mysqli_connect('localhost', 'root', '', 'hackaton');
$clickID=$_POST['clickId'];
$team=$_POST['team'];
$insertsql = "UPDATE room_3x3 SET 'cell_+$clickID' ='team'";
$insert->query($insertsql);

}?>

</body>
</html>