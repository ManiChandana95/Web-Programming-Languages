window.onload = function(){

var span1=document.createElement("span");

var username=document.getElementById("username");
username.parentNode.appendChild(span1);

username.onfocus=function(){
	span1.className="info";
	span1.innerHTML="username must contain only alphabets and numbers";
}
username.onblur=function(){
	
	var usernameRegex = /^[a-zA-Z0-9]+$/;////var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var un=document.getElementById("username").value;//
	if(usernameRegex.test(un) == false)//if(password.value.length<6)
	{
		span1.innerHTML="invalid username";
		span1.className = "error";
	}
	else
	{
		span1.innerHTML="valid username";
		span1.className="ok";
	}
}

/*var span2=document.createElement("span");

var password=document.getElementById("password");
password.parentNode.appendChild(span2);


password.onfocus=function(){
	span2.className="info";
	span2.innerHTML="password must be atleast 6 chars long";
	
}
password.onblur=function(){
	if(password.value.length<6)
	{
		span2.innerHTML="invalid password";
		span2.className = "error";
	}
	else
	{
		span2.innerHTML="valid password";
		span2.className="ok";
	}
}

var span3=document.createElement("span");

var email=document.getElementById("email");
email.parentNode.appendChild(span3);

email.onfocus=function(){
	span3.className="info";
	span3.innerHTML="email must contain @ character followed by email provider name";
}

email.onblur=function(){
	
	var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var em=document.getElementById("email").value;
	if(emailRegex.test(em) == false){
		span3.innerHTML="Invalid email";
		span3.className = "error";
	}
	else
	{
		span3.innerHTML="valid email";
		span3.className="ok";
	}
	
}*/
}


