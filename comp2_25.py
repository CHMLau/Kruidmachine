import mysql.connector

mydb = mysql.connector.connect(
    host="localhost",
    user="Admin",
    passwd="admin1234",
    database="mixDB"
)

mycursor = mydb.cursor()

mycursor.execute("UPDATE compartiment SET comp_volheid = 75 WHERE comp_nummer = 2;")
mydb.commit()
