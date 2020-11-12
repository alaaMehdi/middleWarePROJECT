import requests
import time


def AddFunct(a,b):
    _a=int(a)
    _b=int(b)
    
    #print (_a + _b)
    return _a + _b

while(1):
    link = 'http://127.0.0.1:8855/SetVal.txt'
    f = requests.get(link)
    if (not(f.text == ":")):
        txt = str(f.text)
        x = txt.split(":")
        fileInto= open("http://127.0.0.1:8855/GetVal.txt","w+")

        fileInto.write(str(AddFunct(x[0],x[1])))
        fileInto.close
        
    else:
        
        print("waiting data")
        time.sleep(5)
    
