import RPi.GPIO as GPIO
from time import *
import time
import socket

GPIO.setmode(GPIO.BOARD)

GPIO.setup(35, GPIO.OUT)
GPIO.setup(36, GPIO.OUT)
GPIO.setup(37, GPIO.OUT)
GPIO.setup(38, GPIO.OUT)

lf = GPIO.PWM(35,100)
lb = GPIO.PWM(36,100)
rf = GPIO.PWM(37,100)
rb = GPIO.PWM(38,100)

file = open("/var/www/html/command.txt","w")
file.write("stop")
file.close()

while True:
    
    file = open("/var/www/html/speed.txt","r")
    print("from Speed: ")
    speedCommand = file.read()
    print(speedCommand)
    file.close()
    
    if speedCommand == "slow":
        speed = 40
    elif speedCommand == "medium":
        speed = 50    
    elif speedCommand == "fast":
        speed = 100
    else:
        speed = 0
        print("Speed Error")
        
    file = open("/var/www/html/command.txt","r")
    print("from Command: ")
    command = file.read()
    print(command)
    file.close()
         
    #Forward
    if command == "forward":
        lf.start(speed)
        lb.start(0)
        rf.start(speed)
        rb.start(0)
        
    #Left Forward
    elif command == "forwardLeft":
        rf.start(speed)
        rb.start(0)
        lf.start(speed*.1)
        lb.start(0)

    #Right Forward
    elif command == "forwardRight":
        rf.start(speed*.1)
        rb.start(0)
        lf.start(speed)
        lb.start(0)

    elif command == "backward":
    #Backward
        rf.start(0)
        rb.start(speed)
        lf.start(0)
        lb.start(speed)

    elif command == "left":        
        lf.start(0)
        lb.start(speed)
        rf.start(speed)
        rb.start(0)

    elif command == "right":
        lf.start(speed)
        lb.start(0)
        rf.start(0)        
        rb.start(speed)

    elif command == "stop": 
        lf.start(0)
        lb.start(0)
        rf.start(0)
        rb.start(0)

    else:
        print ("Error")
