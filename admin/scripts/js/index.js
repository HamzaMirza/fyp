$(document).ready(function () {
	let filename=getFileName();
	$('form').bind('keypress', function (e) { /* binding form with the enter key */
		if (e.keyCode == 13) {
			e.preventDefault();
			callsRespectiveFunctionOnBinding(filename);
		}
	});
	$('document').bind('keypress', function (e) { /* binding dom with the enter key */
		if (e.keyCode == 13) {
			callsRespectiveFunctionOnBinding(filename);
		}
	});
	if (filename == "index.php?register")
	{
		initializeCategorySelectBox();
	}
});
 function initializeCategorySelectBox(category_id="category_id")
{
	var select = document.getElementById("category_id");
	let categories=ajaxCall_getCategories().then((data)=>{
		if(data!=0)
		{
			for(var j=0;j<data.length;j++)
				select.options[select.options.length] = new Option(data[j]["name"],data[j]["id"]);
		}
	});
	
}
//Fetches the current file being rendered
function getFileName() {
	let filename="";
	let pathname = window.location.href;
	let filenameArr = pathname.split("/");
	filename = filenameArr[filenameArr.length - 1];
	return filename;
}
//Binding Enter Key with the pages
function callsRespectiveFunctionOnBinding(filename) {
	if (filename == "index.php?login")
		reqLogin();
	else if (filename == "index.php?register")
		reqSignUp();
	else if (filename == "index.php?forgotpassword")
		reqRecovery();
}

//Check Form Fields
function checkForm()
{
	let isSet=false;
	var createAllErrors = function() 
	{
		var form = $(this);
		var showAllErrorMessages = function() {
		// Find all invalid fields within the form.
		var invalidFields = form.find( ":invalid" ).each( function( index, node ) {
			$('#submitButton').click();
		});
		if(invalidFields.length<=0)
			isSet=true;
	};
		showAllErrorMessages();
	};
	$('form').each(createAllErrors);
	return isSet;
}

// Login
function reqLogin()
 {	
	if(checkForm())
	{
		ajaxCall_login();
	}	
 }

async function ajaxCall_getCategories()
{
	let cat=0;
	await $.ajax({ 
					type: 'POST', 
					url: 'http://localhost/fyp/admin/scripts/php/category.php',  
					dataType: 'json',
					success: function (data)
					{ 
						console.log("",data);
						if(data.success==0)
							return 0;
						else
							cat= data["category"];
					},
					error: function(xhr, status, error)
					{
						console.log(error);
						return 0;
					}
		  }); 
		  return cat;
 }
 function ajaxCall_login()
 {
	$.ajax({ 
					type: 'POST', 
					url: 'http://localhost/fyp/admin/scripts/php/login.php',  
					dataType: 'json',
					data:{'email':$('input[name=email]').val(),'password':$('input[name=password]').val()},
					success: function (data)
					{ 
						console.log("",data);
						if(data.success==0)
							showError(data.message);
						else
							location.href="index.php?register"
					},
					error: function(xhr, status, error)
					{
						console.log(error);
						showError("Incorrect Credentials"+error);
					}
		  });
		  
 }
 
 //Register
  function reqSignUp()
 {
	if(checkForm())
	{
		ajaxCall_register();
	}
 }
 function ajaxCall_register()
 {

	$.ajax({ 
					type: 'POST', 
					url: 'http://localhost/fyp/admin/scripts/php/register.php',  
					dataType: 'json',
					data:{
							'email':$('input[name=email]').val(),
							'company_name':$('input[name=company]').val(),
							'password':$('input[name=password]').val(),
							'name':$('input[name=name]').val(),
							'category_id':$("#category_id").children("option:selected").val()
						},
					success: function (data)
					{ 
						console.log(",",data);
						if(data.success==0)
							showError(data.message);
						else
							location.href="index.php?login"
					},
					error: function(error)
					{
						console.log(error);
						showError("Failed to Register "+error);
					}
		  });
 }
  function reqRecovery()
 {
	if(checkForm())
	{
		$('#req').addClass('hide');
		//ajaxCall_recovery();
		redirectCounter();
		showSuccess("");
	}
 }
 function ajaxCall_recovery()
 {
				
	$.ajax({ 
					type: 'POST', 
					url: 'https://www.boaton.ch/api/userresetpassword.php',  
					dataType: 'json',
					data:{'email':$('input[name=email]').val()},
					success: function (data)
					{ 
						console.log(data);
						redirectCounter();						
						showSuccess("");
						
					},
					error: function(error,x,r)
					{
						console.log("e",error,"x",x,"r",r,JSON.parse(error.responseText)["error"])
						
						$('#req').html("Failed to Send Email: "+JSON.parse(error.responseText)["error"]).removeClass('hide');
					}
		  });
 }
 function redirectCounter()
 {
	 var counter=9;
	 $('#counter').html(''+(counter+1));
	 setInterval(function()
	{ 
		$('#counter').html(''+counter); 
		if(counter<=0)
			location.href="index.php?login";
		counter--;
	}, 1000);
 }
 //ShowError
 function showError(msg)
 {
	
	$("#errorMsg").html(msg);
	$("#dangerAlert").removeClass("hide");
 }
 function showSuccess(msg)
 {
	$("#successMsg").html(msg);
	$("#successAlert").removeClass("hide");
 }