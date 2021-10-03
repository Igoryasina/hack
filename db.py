from mysql.connector import connect, Error
from information import HOST_DB, USER_DB, PASSWORD_DB, DBNAME_DB
import json
class connection:
    def create_connection(self, HOST_DB, USER_DB_BOT_NRTC, PASSWORD_DB_BOT_NRTC, DBNAME_DB_BOT_NRTC):
        '''
        возвращает подключение, которое потом принимается в качестве одного из аргументов для основного класса bot
        :return:
        '''
        try:
            connection = connect(
                host=HOST_DB,
                user=USER_DB_BOT_NRTC,
                password=PASSWORD_DB_BOT_NRTC,
                database=DBNAME_DB_BOT_NRTC,
                buffered=True)
            if connection.is_connected():
                print('Connected to MySQL database')
            return connection
        except Error as e:
            print(e)
    def __init__(self, HOST_DB, USER_DB_BOT_NRTC, PASSWORD_DB_BOT_NRTC, DBNAME_DB_BOT_NRTC):
        self.connection = self.create_connection(HOST_DB, USER_DB_BOT_NRTC, PASSWORD_DB_BOT_NRTC, DBNAME_DB_BOT_NRTC)

    def info_status(self, user_id):
        with self.connection.cursor() as cursor:
            cursor.execute('SELECT * FROM persons WHERE idperson = {0}'.format( user_id))
            result = cursor.fetchall()
            try:
                return result[0]
            except:
                return False

    def new_person(self, user_id):
        with self.connection.cursor() as cursor:
            cursor.execute(f'INSERT INTO persons (idperson) VALUES ({user_id})')
            self.connection.commit()


db_connection = connection(HOST_DB, USER_DB, PASSWORD_DB, DBNAME_DB)

