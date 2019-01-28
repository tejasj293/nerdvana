function formValidate(){
	var letters = /^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/;
	var fname=document.getElementById('name').value;
	if(fname.length<3 && fname.match(letters)){
		document.getElementById('namefault').innerHTML="**Minimum length should be 3";
		return false;
	}

	var num=document.getElementById('phoneNumber').value;
	if(num.length != 10){
		document.getElementById('numberfault').innerHTML="Enter 10 digit phone number";
		return false;
	}

	var pass=document.getElementById('SupPasswd').value;
	var conpass=document.getElementById('RepSupPasswd').value;

	if(pass.length<8){
		document.getElementById('passwdfault').innerHTML="Password must contain at least 8 characters";
		return false;
	}
	else{
		if(pass != conpass){
			document.getElementById('conpasswdfault').innerHTML="Password does not match";
		    return false;		
		}
	}
}