var base_url="http://localhost/fyp/admin/scripts/php/";
var base_url_laravel="http://localhost/fyp/api";
//Fetches the current file being rendered
function getFileName() {
	let filename="";
	let pathname = window.location.href;
	let filenameArr = pathname.split("/");
	filename = filenameArr[filenameArr.length - 1];
	return filename;
}

var filename=getFileName();
	
function preventDefaultFormAction(){
	console.log("A");
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
}
$(document).ready(function () {
	preventDefaultFormAction();

});


//Binding Enter Key with the pages
function callsRespectiveFunctionOnBinding(filename) {
	if (filename == "index.php?login")
		reqLogin();
	else if (filename == "index.php?register")
		reqSignUp();
	else if (filename == "index.php?forgotpassword")
		reqRecovery();
	else if (filename == "admin.php?questions_add")
		reqAddQuestion();
	else if(filename.includes('admin.php?admin_add'))
		reqAddAdmin();
	else if(filename.includes('admin.php?vacancy_add'))
		reqAddVacancy();
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
	console.log(isSet)
	return isSet;
}

function redirectToAuthUponCheck()
{
	if(checkIsLogin()==0) 
			location.href="index.php?login";
}

function redirectToAdminUponCheck()
{
	console.log("filename");
	if(checkIsLogin()==1) 
			location.href="admin.php?about";
}

function resetMsg()
{
	($('#dangerAlert').attr('class')=='hide')?$("#dangerAlert").removeClass("hide"):$("#dangerAlert").addClass("hide");
	($('#successAlert').attr('class')=='hide')?$("#successAlert").removeClass("hide"):$("#successAlert").addClass("hide");
}

 //ShowError
 function showError(msg)
 {
	resetMsg();
	$("#errorMsg").html(msg);
	$("#dangerAlert").removeClass("hide");
 }
 
 //ShowSuccess
 
 function showSuccess(msg)
 {
	 resetMsg();
	$("#successMsg").html(msg);
	$("#successAlert").removeClass("hide");
 }
