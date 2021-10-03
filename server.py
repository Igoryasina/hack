from flask import Flask
from flask_restful import Api, Resource, reqparse
import random
app = Flask(__name__)
api = Api(app)


class Quote(Resource):
    def __init__(self, connection):
        self.connection = connection
    def put(self, id):
        parser = reqparse.RequestParser()
        print(parser)
        # parser.add_argument("author")
        # parser.add_argument("quote")
        # params = parser.parse_args()
        # for quote in ai_quotes:
        #     if (id == quote["id"]):
        #         quote["author"] = params["author"]
        #         quote["quote"] = params["quote"]
        #         return quote, 200
        #
        # quote = {
        #     "id": id,
        #     "author": params["author"],
        #     "quote": params["quote"]
        # }
        #
        # ai_quotes.append(quote)
        return quote, 201
    def get(self, id=0):
        if id == 0:
            return random.choice(ai_quotes), 200
        for quote in ai_quotes:
            if(quote["id"] == id):
                return quote, 200
        return "Quote not found", 404

api.add_resource(Quote, "/test/<int:id>")
if __name__ == '__main__':
    app.run(debug=True)