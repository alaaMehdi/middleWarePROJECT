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

	try:
	    Var1
	except NameError:
	    Var1 = None

	try:
	    Var2
	except NameError:
	    Var2 = None

	# Test whether variable is defined to be None
	if Var1 is not None:
	    if Var2 is not None:
	
	    	Resultat = (int(Var1) + int(Var2))
	else:
    	    Resultat =''
	    result2 = firebase.put('/ResultatPython/', 'Var', '')
	#end

	#Pour mise ajour valeur via get
	#begin
	result2 = firebase.put('/ResultatPython/', 'Var', Resultat)

	print ('Val updated')
	#end
        
        print("Fetching data")
        time.sleep(0.05)
    
