from firebase import firebase
import time

firebase = firebase.FirebaseApplication("https://middleware-3db4e.firebaseio.com/", None)

#Pour enrgistrer via post
#begin
'''data = {
  'Name':'Alaa Mehdi',
  'Email':'K.ktb.com'
}
result = firebase.post('/table', data)
print (result)'''
#end



while(1):
    	#Pour recuperer via get
	#begin
	Var1 = firebase.get('/ResultatPHP/Variables/Var 1', '')
	Var2 = firebase.get('/ResultatPHP/Variables/Var 2', '')
	Op   = firebase.get('/ResultatPHP/Variables/Operation', '')

	try:
	    Var1
	except NameError:
	    Var1 = None

	try:
	    Op
	except NameError:
	    Op = None

	try:
	    Var2
	except NameError:
	    Var2 = None



	# Test whether variable is defined to be None
	if Var1 is not None:
	    if Var2 is not None:
	        if Op is not None:
	            if Op == "add":
	    	        Resultat = (int(Var1) + int(Var2))
	    	    if Op == "sub":
                	Resultat = (int(Var1) - int(Var2))
                if Op == "mul":
	    	        Resultat = (int(Var1) * int(Var2))
                if Op == "div":
	    	        if Var2 == "0":
	    	            Resultat = "Error: Division of 0 is not allowed"
	    	        else:
	    	            Resultat = (int(Var1) / int(Var2))


	else:
	    firebase.put('/ResultatPython/', 'Var', '')
	    Resultat = ''
	#end

	#Pour mise ajour valeur via get
	#begin
	firebase.put('/ResultatPython/', 'Var', Resultat)

	print ('Val updated')
	#end
        
        print("Fetching data")
        time.sleep(0.05)
    

