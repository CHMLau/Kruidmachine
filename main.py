import mysql.connector
import time

import serial
import os

mydb = mysql.connector.connect (
    host="localhost",
    user="Admin",
    passwd="admin1234",
    database="mixDB"
)

mycursor = mydb.cursor()

port = serial.Serial("/dev/ttyUSB0", baudrate=9600, timeout=3.0)

os.system("python mix_uit.py")
port.write("c0")
mydb.commit()

while True:

    mydb.commit()

    mycursor.execute("SELECT hoeveelheid1, hoeveelheid2, hoeveelheid3 FROM mix WHERE maken = 'ja';")

    for x in mycursor:

        if (x[0] == 'theelepel'):
            port.write("c1")
            mydb.commit()
            print("comp1: theelepel")
            time.sleep(12)


        if (x[0] == '1/2 theelepel'):
            port.write("c2")
            mydb.commit()
            print("comp1: 1/2 theelepel")
            time.sleep(12)
            #hier de tijd die nodig is per compartiment ook doorsturen als we met miligrammen gaan werken

        if (x[1] == 'theelepel'):
            port.write("c3")
            mydb.commit()
            print("comp2: theelepel")
            time.sleep(12)


        if (x[1] == '1/2 theelepel'):
            port.write("c4")
            mydb.commit()
            print("comp2: 1/2 theelepel")
            time.sleep(12)

        if (x[2] == 'theelepel'):
            port.write("c5")
            mydb.commit()
            print("comp3: theelepel")
            time.sleep(12)


        if (x[2] == '1/2 theelepel'):
            port.write("c6")
            mydb.commit()
            print("comp3: 1/2 theelepel")
            time.sleep(12)

    os.system("python mix_uit.py")
    port.write("c0")
    mydb.commit()
    print("mix maken uit")

    rcv = port.readline().strip()

    if (rcv == 'C1_OUT'):
        os.system('python comp1_100.py')
        print("Comp1 = 100%")

    elif (rcv == 'C1_50'):
        os.system("python comp1_50.py")
        print("Comp1 = 50%")

    elif (rcv == 'C1_25'):
        os.system("python comp1_25.py")
        print("Comp1 = 25%")

    elif (rcv == 'C1_0'):
        os.system("python comp1_0.py")
        print("Comp1 = 0%")

# ------------------------------------------

    if (rcv == 'C2_OUT'):
        os.system('python comp2_100.py')
        print("Comp2 = 100%")

    elif (rcv == 'C2_50'):
        os.system("python comp2_50.py")
        print("Comp2 = 50%")

    elif (rcv == 'C2_25'):
        os.system("python comp2_25.py")
        print("Comp2 = 25%")

    elif (rcv == 'C2_0'):
        os.system("python comp2_0.py")
        print("Comp2 = 0%")

# ------------------------------------------

    if (rcv == 'C3_OUT'):
        os.system('python comp3_100.py')
        print("Comp3 = 100%")

    elif (rcv == 'C3_50'):
        os.system("python comp3_50.py")
        print("Comp3 = 50%")

    elif (rcv == 'C3_25'):
        os.system("python comp3_25.py")
        print("Comp3 = 25%")

    elif (rcv == 'C3_0'):
        os.system("python comp3_0.py")
        print("Comp3 = 0%")

    time.sleep(2)
    mydb.commit()

mydb.close()
