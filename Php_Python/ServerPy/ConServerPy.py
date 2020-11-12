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
        
        print("Writing Data")
        # defining the api-endpoint  
        API_ENDPOINT = "http://127.0.0.1:8855/Response.php"
        
        
        # your source code here 
        source_code = str(AddFunct(x[0],x[1]))
        
        # data to be sent to api 
        data = {'code':source_code} 
        
        # sending post request and saving response as response object 
        r = requests.post(url = API_ENDPOINT, data = data) 
        
        # extracting response text  
        pastebin_url = r.text 
        print("The pastebin URL is:%s"%pastebin_url) 
        time.sleep(2)
        
    else:
        
        print("Waiting data")
        time.sleep(2)
    


