import mysql.connector

mydb = mysql.connector.connect(
	host="localhost",
	user="Admin",
	passwd="admin1234",
	database="mixDB"
)

mycursor = mydb.cursor()

mycursor.execute("UPDATE mix SET maken = 'nee' WHERE maken = 'ja';")
mydb.commit()
