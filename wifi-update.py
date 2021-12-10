import os
from os.path import exists
import time

path = "/media/pi"
dir_list = os.listdir(path)
dir_list = str(dir_list)

timer = 0

while(dir_list=='[]'):
    print("USB is empty")
    time.sleep(1)
    
    dir_list = os.listdir(path)
    dir_list = str(dir_list)

    timer = timer+1
    print(timer)

    if(timer > 60):
        print("No USB found during boot")
        quit()


dir_list = dir_list.replace('[\'', '')
dir_list = dir_list.replace('\']', '')
config_file = "/media/pi/"+dir_list+"/wpa_supplicant.conf"

print ("USB: "+dir_list)
print (config_file)

if exists(config_file):
    os.system('cp '+config_file+' /etc/wpa_supplicant/wpa_supplicant.conf')