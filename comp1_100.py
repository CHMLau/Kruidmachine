import mysql.connector

mydb = mysql.connector.connect(
    host="localhost",
    user="Admin",
    passwd="admin1234",
    database="mixDB"
)

mycursor = mydb.cursor()

mycursor.execute("UPDATE compartiment SET comp1_volheid = 0;")
mydb.commit()
