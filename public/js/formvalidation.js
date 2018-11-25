
$(function(){

$("#First_Name_error_message").hide();
$("#Last_Name_error_message").hide();
$("#Password_error_message").hide();
$("#Password_retype_error_message").hide();
$("#Email_error_message").hide();
$("#telephone_name_error_message").hide();

	

var error_firstname=false;
var error_lastname=false;
var error_email=false;
var error_password=false;
var error_retypepassword=false;
var error_telephone=false;







/*fname validation*/
$("#name").keypress( function() {
	alert('khsdgfdskf');
	check_fname();
	
}
);
$("#name").focusout( function() {
	check_fname();


}
);

/*lname validation*/
$("#lname").focusout( function() {
	check_lname();

}
);
$("#lname").keypress( function() {
	check_lname();

	

}
);


/*password validation*/
$("#password").focusout( function() {
	check_password();
	
	
}
);
$("#password").keypress( function() {
	check_password();

}
);



/*retype password validation*/
$("#password-confirm").focusout( function() {
	check_retype_password();
	

	
}
);


/*email validation*/
$("#email").focusout( function() {
	check_email();
	
}
);
$("#email").keypress( function() {
	check_email();
}
);


/*telephone validation*/
$("#tel").focusout( function() {
	check_tel();

	
}
);
$("#tel").keypress( function() {
	check_tel();

}
);

/*first name validation funct*/
function check_fname(){
 var fname= $("fname").val();
 var pattern_fname=/^[a-zA-Z_]+( [a-zA-Z_]+)*$/;
 var error_code='0';
if( pattern_fname.test(fname)){
	//$("#First_Name_error_message").hide();

}






else{
	error_code='1';
	
	/*$("#fname").css("background-color","red");

	$("#First_Name_error_message").html("charachters only");
	$("#First_Name_error_message").show();*/
}

if(fname!=""){
		
	}

	else{
		error_code='2';
		

		/*$("#fname").css("background-color","red");

		$("#First_Name_error_message").html("shold be filled");
		$("#First_Name_error_message").show();*/
	}

	
switch (error_code) { 
	case '0': 
	$("#name").css("background-color","#B8FAC6  ");
	break;
	case '1': 
	$("#nname").css("background-color","#FCA2A2    ");
	$("#First_Name_error_message").html("charachters only");
	$("#First_Name_error_message").show();
	error_firstname=true;
	break;
	case '2': 
	$("#nname").css("background-color","#FCA2A2   ");
	$("#First_Name_error_message").html("please enter the first name");
	$("#First_Name_error_message").show();
	error_firstname=true;
	break;
		
	
		}
}
	



/*lastname name validation funct*/
function check_lname(){
 var lname= $("#lname").val();
 var pattern_lname=/^[a-zA-Z_]+( [a-zA-Z_]+)*$/;

 var error_code='0';
if( pattern_lname.test(lname)){
	$("#Last_Name_error_message").hide();


}






else{
	error_code='1';
	
	/*$("#fname").css("background-color","red");

	$("#First_Name_error_message").html("charachters only");
	$("#First_Name_error_message").show();*/
}

if(lname!=""){
		
	}

	else{
		error_code='2';
		

		/*$("#fname").css("background-color","red");

		$("#First_Name_error_message").html("shold be filled");
		$("#First_Name_error_message").show();*/
	}

	
switch (error_code) { 
	case '0': 
	$("#lname").css("background-color","#B8FAC6  ");
	break;
	case '1': 
	$("#lname").css("background-color","#FCA2A2    ");
	$("#Last_Name_error_message").html("charachters only");
	$("#Last_Name_error_message").show();
	error_lastname=true;
	break;
	case '2': 
	$("#lname").css("background-color","#FCA2A2   ");
	$("#Last_Name_error_message").html("please enter the last name");
	$("#Last_Name_error_message").show();
	error_lastname=true;
	break;
		
	
		}
}




/*email validation*/
function check_email(){
	var email=$("#email").val();
	var pattern_email= /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
  
if(pattern_email.test(email)){
	
	$("#email").css("background-color","#B8FAC6  ");
	$("#Email_error_message").hide();
}
else{
	$("#email").css("background-color","#FCA2A2   ");
	$("#Email_error_message").html("please enter a valid email address");
	$("#Email_error_message").show();
	 error_email=true;
}


}


function check_password(){
	var password=$("#password").val().length;
	if(password < 6){

	$("#password").css("background-color","#FCA2A2   ");
	$("#Password_error_message").html("should contain more than 6 charachters");
	$("#Password_error_message").show();
	error_password=true;
	
	}
	else{
	$("#password").css("background-color","#B8FAC6  ");
	$("#Password_error_message").hide();	
	
	
	}
}



function check_retype_password(){
	var password=$("#password").val();
	var retype_password=$("#retype_password").val();
	 if(password == retype_password  && retype_password!=""){
	 	$("#retype_password").css("background-color","#B8FAC6  ");
		$("#Password_retype_error_message").hide();
	 }
	 else{
	 $("#retype_password").css("background-color","#FCA2A2   ");
	$("#Password_retype_error_message").html("password didnt match");
	$("#Password_retype_error_message").show();
	error_retypepassword=true;
	 }
}


function check_tel(){
var tel=$("#tel").val();
var tellen=$("#tel").val().length;
var pattern=/^[a-zA-Z]+( [a-zA-Z]+)*$/;
var patternone=/^[a-zA-Z0-9]+( [a-zA-Z0-9]+)*$/;

if( tellen<9 || pattern.test(tel)){
	
	 $("#tel").css("background-color","#FCA2A2");
	$("#telephone_error_message").html("please enter valid a telephone number");

	$("#telephone_error_message").show();
	error_telephone=true;
}
else{
$("#tel").css("background-color","#B8FAC6  ");
	$("#telephone_error_message").hide();
}
	
}


});

