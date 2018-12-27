function loginSubmit() {
  var p = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
  var v =  document.login.username1.value;
  if(v.length < 4)
  {
    document.getElementById('usernameerror').innerHTML = '<br>Minimun Length Should Be 3';
    //alert('Enter Valid Name');
  }
  else {
    document.getElementById('usernameerror').innerHTML = '';
  }
  if(!p.test(document.login.password1.value))
  {
    document.getElementById('passwordeerror').innerHTML = '<br>Incorrect password';
  }
  else{
    document.getElementById('passworderror').innerHTML = '';
  }
}
function signinSubmit() {
  var n = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  var p = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
  var q = /^[A-Za-z]{3,20}$/;
  if(!n.test(document.signin.email.value))
  {
  alert('Enter Valid Email');
  }
  if(!p.test(document.signin.password2.value))
  {
  alert('Enter Valid Password');
  }
  if(!q.test(document.signin.fname.value))
  {
  alert('Enter Valid First Name');
  }
  if(!q.test(document.signin.lname.value))
  {
  alert('Enter Valid Last Name');
  }
}
function myFunction() {
    
    var x = document.getElementById('loginform');
	var y = document.getElementById('signinform');
	
    if (x.style.display === 'none') {
	    
        x.style.display = 'block';
		y.style.display = 'none';
    } else {
	   
        x.style.display = 'none';
		y.style.display = 'block';
    }
	
}