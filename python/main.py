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

while True:

    port.write("c0")
    mydb.commit()

    mycursor.execute("SELECT hoeveelheid_comp_1 FROM mixes WHERE maken = 'ja';")

    for x in mycursor:
        print("mix maken: " + x[0])

        if (x[0] == 'theelepel'):
            port.write("c1")
            mydb.commit()
            print("comp1: theelepel")
            os.system("python mix_uit.py")

        elif (x[0] == '1/2 theelepel'):
            port.write("c2")
            print("comp1: 1/2 theelepel")
            os.system("python mix_uit.py")
            #hier de tijd die nodig is per compartiment ook doorsturen als we met miligrammen gaan werken

    mycursor.execute("SELECT hoeveelheid_comp_2 FROM mixes WHERE maken = 'ja';")

    for x in mycursor:
        # print("mix maken: " + x[0])

        if (x[0] == 'theelepel'):
            port.write("c3")
            mydb.commit()
            print("comp2: theelepel")
            os.system("python mix_uit.py")

        elif (x[0] == '1/2 theelepel'):
            port.write("c4")
            print("comp2: 1/2 theelepel")
            os.system("python mix_uit.py")


    mycursor.execute("SELECT hoeveelheid_comp_3 FROM mixes WHERE maken = 'ja';")

    for x in mycursor:

        if (x[0] == 'theelepel'):
            port.write("c5")
            mydb.commit()
            print("comp3: theelepel")
            os.system("python mix_uit.py")

        elif (x[0] == '1/2 theelepel'):
            port.write("c6")
            print("comp3: 1/2 theelepel")
            os.system("python mix_uit.py")

        else:
            os.system("python mix_uit.py")
            print("mix maken uit")

    rcv = port.readline().strip()

    if (rcv == 'C1_OUT'):
        os.system('cd comp1/')
        os.system('python comp1_100.py')
        print("Comp1 = 100%")

    elif (rcv == 'C1_50'):
        os.system('cd comp1/')
        os.system("python comp1_50.py")
        print("Comp1 = 50%")

    elif (rcv == 'C1_25'):
        os.system('cd comp1/')
        os.system("python comp1_25.py")
        print("Comp1 = 25%")

    elif (rcv == 'C1_0'):
        os.system('cd comp1/')
        os.system("python comp1_0.py")
        print("Comp1 = 0%")

# ------------------------------------------

    if (rcv == 'C2_OUT'):
        os.system('cd comp2/')
        os.system('python comp2_100.py')
        print("Comp2 = 100%")

    elif (rcv == 'C2_50'):
        os.system('cd comp2/')
        os.system("python comp2_50.py")
        print("Comp2 = 50%")

    elif (rcv == 'C2_25'):
        os.system('cd comp2/')
        os.system("python comp2_25.py")
        print("Comp2 = 25%")

    elif (rcv == 'C2_0'):
        os.system('cd comp2/')
        os.system("python comp2_0.py")
        print("Comp2 = 0%")

# ------------------------------------------

    if (rcv == 'C3_OUT'):
        os.system('cd comp3/')
        os.system('python comp3_100.py')
        print("Comp3 = 100%")

    elif (rcv == 'C3_50'):
        os.system('cd comp3/')
        os.system("python comp3_50.py")
        print("Comp3 = 50%")

    elif (rcv == 'C3_25'):
        os.system('cd comp3/')
        os.system("python comp3_25.py")
        print("Comp3 = 25%")

    elif (rcv == 'C3_0'):
        os.system('cd comp3/')
        os.system("python comp3_0.py")
        print("Comp3 = 0%")

    time.sleep(2)
    mydb.commit()

mydb.close()
