setUserLocalStorage();
callsRedirectionOnAuthPages(filename);

//Binding Enter Key with the pages
function callsRedirectionOnAuthPages(filename) {
	console.log(filename)
	redirectToAdminUponCheck();
	if (filename == "index.php?register")
		initializeCategorySelectBox();
}

// Login
function reqLogin()
 {	
	if(checkForm())
	{
		ajaxCall_login();
	}	
 }

  function ajaxCall_login()
 {
	$.ajax({ 
					type: 'POST', 
					url: base_url + 'login.php',  
					dataType: 'json',
					data:{'email':$('input[name=email]').val(),'password':$('input[name=password]').val()},
					success: function (data)
					{ 
						console.log("",data);
						if(data.success==0)
							showError(data.message);
						else
						{
							updateUserLocalStorage($('input[name=email]').val(),$('input[name=password]').val(),1,data.cid);
							redirectToAdminUponCheck();
						}
					},
					error: function(xhr, status, error)
					{
						console.log(error);
						showError("Incorrect Credentials"+error);
					}
		  });
		  
 }
 
//Categories
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
async function ajaxCall_getCategories()
{
	let cat=0;
	await $.ajax({ 
					type: 'POST', 
					url: base_url + 'category.php',  
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
					url: base_url + 'register.php',  
					dataType: 'json',
					data:{
							'email':$('input[name=email]').val(),
							'company_name':$('input[name=company]').val(),
							'password':$('input[name=password]').val(),
							'name':$('input[name=name]').val(),
							'address':$('input[name=address]').val(),
							'description':$('#description').val(),
							'category_id':$("#category_id").children("option:selected").val()
						},
					success: function (data)
					{ 
						console.log($('#description').html(),",",data);
						if(data.success==0)
							showError(data.message);
						else
						{
							updateUserLocalStorage($('input[name=email]').val(),$('input[name=password]').val(),1,data.cid);
							redirectToAdminUponCheck();
						}
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
 function ajaxCall_recovery() //incomplete
 {
				
	$.ajax({ 
					type: 'POST', 
					url:'',  
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
 