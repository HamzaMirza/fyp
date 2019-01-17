var $pagination="";
$(document).ready(function () {
	 setUserLocalStorage();
	callsRedirectionOnAdminPages(filename);
});

function logout() //logout function
{
		$.ajax({ 
					type: 'POST', 
					url: base_url + 'logout.php',  
					dataType: 'json',
					data:{'email':user.email},
					success: function (data)
					{ 
						console.log("",data);
						if(data.success==0)
							showError(data.message);
						else
						{
							updateUserLocalStorage("null","null",0);
							redirectToAuthUponCheck();
						}
					},
					error: function(xhr, status, error)
					{
						console.log(error);
						showError("Incorrect Credentials"+error);
					}
		  });
}
//Binding Enter Key with the pages
function callsRedirectionOnAdminPages(filename) {
		redirectToAuthUponCheck();
		if(filename=='admin.php?questions_view')
			pagination_load('q');
		else if(filename=='admin.php?applicants_view')
			pagination_load('a');
		else if(filename=='admin.php?vacancy_view')
			pagination_load('v');
		else if(filename=='admin.php?admin_view')
			pagination_load('ad');
		else if(filename=='admin.php?questions_add')
		{
			InitializeTimeSelectBox();
		}
		else if(filename.includes('admin.php?question_edit'))
		{
			InitializeTimeSelectBox();
			initializeEditQuestion();
		}
}

function generate_table_questions() {
      var tr;
      $('#question_body').html('');
      for (var i = 0; i < displayRecords.length; i++) {
            tr = $('<tr/>');
            tr.append("<td>" +
							"<b>"+displayRecords[i].question+"</b> <span style=\"float: right\">"+displayRecords[i].time+"</span>" + 
							"<ul>" +
							((displayRecords[i].ans1!='')? "<li>"+displayRecords[i].ans1+"</li>":"")+
							((displayRecords[i].ans2!='')? "<li>"+displayRecords[i].ans2+"</li>":"")+
							((displayRecords[i].ans3!='')? "<li>"+displayRecords[i].ans3+"</li>":"")+
							((displayRecords[i].ans4!='')? "<li>"+displayRecords[i].ans4+"</li>":"")+
							"<span style=\"float: right\"><b> Draft: </b>"+((displayRecords[i].draft==0)? "No":"Yes")+"</span>"+
							"<br />"+
							"<span style=\"float: right\">"+((displayRecords[i].draft==0)? "":"<a  href=\"admin.php?question_edit&id="+displayRecords[i].id+"\">Edit</a>")+"</span>"+
							"</ul>"+
					"</td>");
            $('#question_body').append(tr);
      }
}

function generate_table_applicants() {
      var tr;
      $('#applicant_body').html('');
      for (var i = 0; i < displayRecords.length; i++) {
            tr = $('<tr/>');
			tr.append("<td>" + displayRecords[i].vid + "</td>");
            tr.append("<td>" + displayRecords[i].name + "</td>");
            tr.append("<td>" + displayRecords[i].education + "</td>");
			tr.append("<td>" + displayRecords[i].score + "</td>");
            tr.append("<td>"+
						" <a class=\"btn btn-primary cvButton\" download href=\"" + base_url_laravel+" "+ displayRecords[i].cv + "\" > Download CV </a>"+
					 "</td>");
            $('#applicant_body').append(tr);
      }
}
function openModel(id,email){
	 $('#modal-data').text(email);
	  $('#modal-data-id').text(id);
	 $('#modal').modal('show');
}
function closeModel(){
	 $('#modal-data').text();
	  $('#modal-data-id').text();
	 $('#modal').modal('hide');
}
function deleteAdmin(){
	console.log("Deleting"+ $('#modal-data-id').text());
	
		$.ajax({ 
					type: 'POST', 
					url: base_url + 'deleteAdmin.php',  
					dataType: 'json',
					data:{
							'id':$('#modal-data-id').text(),
						},
					success: function (data)
					{ 
						console.log(data);
						if(data.success==0)
							showError(data.message);
						else
						{
							 location.href="admin.php?admin_view";
						}
						closeModel();
						scrollToTop();
					},
					error: function(xhr, status, error)
					{
						console.log(error);
						showError("Error Occurred"+error);
					}
		  });

}
function generate_table_admins() {
      var tr;
      $('#admin_body').html('');
      for (var i = 0; i < displayRecords.length; i++) {
            tr = $('<tr/>');
			tr.append("<td>" + displayRecords[i].id + "</td>");
            tr.append("<td>" + displayRecords[i].name + "</td>");
            tr.append("<td>" + displayRecords[i].email + "</td>");
            tr.append("<td>"+
						" <a class=\"btn btn-danger \" onclick=\"openModel(" +displayRecords[i].id + ",'" +displayRecords[i].email + "')\" > Delete </a>"+
					 "</td>");
            $('#admin_body').append(tr);
      }
}

function generate_table_vacancies() {
      var tr;
      $('#vacancy_body').html('');
      for (var i = 0; i < displayRecords.length; i++) {
            tr = $('<tr/>');
			tr.append("<td>" + displayRecords[i].vid + "</td>");
            tr.append("<td>" + displayRecords[i].seats + "</td>");
            tr.append("<td>" + displayRecords[i].experience + "</td>");
			tr.append("<td>" + displayRecords[i].city + "</td>");
			tr.append("<td>" + displayRecords[i].salary + "</td>");
            tr.append("<td>" + displayRecords[i].lastdate + "</td>");
			tr.append("<td>" + displayRecords[i].designation + "</td>");
			tr.append("<td>" + displayRecords[i].role + "</td>");
			tr.append("<td>" + displayRecords[i].date + "</td>");
            $('#vacancy_body').append(tr);
      }
}
function apply_pagination(indicator) {
      $pagination.twbsPagination({
            totalPages: totalPages,
            visiblePages: 6,
            onPageClick: function (event, page) {
                  displayRecordsIndex = Math.max(page - 1, 0) * recPerPage;
                  endRec = (displayRecordsIndex) + recPerPage;
                 
                  displayRecords = records.slice(displayRecordsIndex, endRec);
				  if(indicator=='q')
					generate_table_questions();
				else if(indicator=='a')
					generate_table_applicants();
				else if(indicator=='v')
					generate_table_vacancies();
				else if(indicator=='ad')
					generate_table_admins();
            }
      });
}

function pagination_load(indicator) //logout function
{
		 $pagination = $('#pagination'),
		totalRecords = 0,
		records = [],
		displayRecords = [],
		recPerPage = 5,
		page = 1,
		totalPages = 0;
		if(indicator=='q')
		{
			$.ajax({ 
					type: 'POST', 
					url: base_url + 'questions.php',  
					dataType: 'json',
					success: function (data)
					{ 
						if(data.success==0)
							showError(data.message);
						else
						{
							records = data.questions;
						    console.log(records);
						    totalRecords = records.length;
						    totalPages = Math.ceil(totalRecords / recPerPage);
						    apply_pagination(indicator);
						}
					},
					error: function(xhr, status, error)
					{
						console.log(error);
						showError("Incorrect Credentials"+error);
					}
		  });
		}
		else if(indicator=='a')
		{
			
			$.ajax({ 
					type: 'POST', 
					url: base_url + 'testscores.php',  
					dataType: 'json',
					data:{'cid':user.cid},
					success: function (data)
					{ 
						console.log(data);
						if(data.success==0)
							showError(data.message);
						else
						{
							records = data.scores;
						    console.log(records);
						    totalRecords = records.length;
						    totalPages = Math.ceil(totalRecords / recPerPage);
						    apply_pagination(indicator);
						}
					},
					error: function(xhr, status, error)
					{
						console.log(error);
						showError("Incorrect Credentials"+error);
					}
		  });
		}
		else if(indicator=='v')
		{
			
			$.ajax({ 
					type: 'POST', 
					url: base_url + 'vacancies.php',  
					dataType: 'json',
					data:{'cid':user.cid},
					success: function (data)
					{ 
						console.log(data);
						if(data.success==0)
							showError(data.message);
						else
						{
							records = data.vacancies;
						    console.log(records);
						    totalRecords = records.length;
						    totalPages = Math.ceil(totalRecords / recPerPage);
						    apply_pagination(indicator);
						}
					},
					error: function(xhr, status, error)
					{
						console.log(error);
						showError("Incorrect Credentials"+error);
					}
		  });
		}
		else if(indicator=='ad')
		{
			
			$.ajax({ 
					type: 'POST', 
					url: base_url + 'admins.php',  
					dataType: 'json',
					data:{'cid':user.cid},
					success: function (data)
					{ 
						console.log(data);
						if(data.success==0)
							showError(data.message);
						else
						{
							records = data.admins;
						    totalRecords = records.length;
						    totalPages = Math.ceil(totalRecords / recPerPage);
						    apply_pagination(indicator);
						}
					},
					error: function(xhr, status, error)
					{
						console.log(error);
						showError("Incorrect Credentials"+error);
					}
		  });
		}
}
function InitializeTimeSelectBox(){
	var select = document.getElementById("time");
	for(var i=0;i<10;i++)
		for(var j=0;j<60;j++)
			if(j<10)
				select.options[select.options.length] = new Option('0'+i+':'+'0'+j,'0'+i+':'+'0'+j);
			else
				select.options[select.options.length] = new Option('0'+i+':'+''+j,'0'+i+':'+''+j);
}
 
// add questions
function reqAddQuestion()
 {	
	if(checkForm())
	{
		ajaxCall_questions_add();
	}	
 }
 function ajaxCall_questions_add(){
	 $.ajax({ 
					type: 'POST', 
					url: base_url + 'uploadquestions.php',  
					dataType: 'json',
					data:{
							'c_id':user.cid,
							'question': $("input[name=inputQuestion]").val(),
							'correct': $("input[name=inputCorrect]").val(),
							'time':  $("#time").children("option:selected").val(),
							'draft': $("#draft").children("option:selected").val(),
							'ans1': $("input[name=inputAnswer]").val(),
							'ans2': $("input[name=inputAnswer1]").val(),
							'ans3': $("input[name=inputAnswer2]").val(),
							'ans4': $("input[name=inputAnswer3]").val()
						},
					success: function (data)
					{ 
						console.log(data);
						if(data.success==0)
							showError(data.message);
						else
						{
							showSuccess(data.message);
							 $("input[name=inputQuestion]").val('');
							  $("input[name=inputCorrect]").val('');
							   $("input[name=inputAnswer]").val('');
							   $("input[name=inputAnswer1]").val('');
							   $("input[name=inputAnswer2]").val('');
							   $("input[name=inputAnswer3]").val('');
							   $("#time").val($("#time option:first").val());
							   $("#draft").val($("#draft option:first").val());
						}
						scrollToTop();
					},
					error: function(xhr, status, error)
					{
						console.log(error);
						showError("Error Occurred"+error);
					}
		  });
 }
 function scrollToTop() { /* scrolling the chat window to the latest message */
	window.scrollTo(0, 0);
}
function indexMatchingText(ele, text) {
    for (var i=0; i<ele.length;i++) {
        if (ele[i].childNodes[0].nodeValue === text){
            return i;
        }
    }
    return undefined;
}
function getQueryParams(param){
		let searchParams = new URLSearchParams(window.location.search);
		if(searchParams.has(param))
		return searchParams.get(param);
	return 0;
}
function initializeEditQuestion(){
	let param=getQueryParams('id');
	 
		$.ajax({ 
					type: 'POST', 
					url: base_url + 'getquestion.php',  
					dataType: 'json',
					data:{
							'id':param,
						},
					success: function (data)
					{ 
						console.log(data);
						if(data.success==0)
							showError(data.message);
						else
						{
							 $("input[name=inputQuestion]").val(data.question[0].question);
							  $("input[name=inputCorrect]").val(data.question[0].correct);
							   $("input[name=inputAnswer]").val(data.question[0].ans1);
							   $("input[name=inputAnswer1]").val(data.question[0].ans2);
							   $("input[name=inputAnswer2]").val(data.question[0].ans3);
							   $("input[name=inputAnswer3]").val(data.question[0].ans4);
							   $("#time option[value='" + data.question[0].time + "']").prop('selected', true);
							   $("#draft option[value='" + data.question[0].draft + "']").prop('selected', true);
						}
						scrollToTop();
					},
					error: function(xhr, status, error)
					{
						console.log(error);
						showError("Error Occurred"+error);
					}
		  });
}

//update question
function reqEditQuestion()
 {	
	if(checkForm())
	{
		ajaxCall_question_edit();
	}	
 }
 function ajaxCall_question_edit(){
	 let param=getQueryParams('id');
	 $.ajax({ 
					type: 'POST', 
					url: base_url + 'updatequestion.php',  
					dataType: 'json',
					data:{
							'id':param,
							'question': $("input[name=inputQuestion]").val(),
							'correct': $("input[name=inputCorrect]").val(),
							'time':  $("#time").children("option:selected").val(),
							'draft': $("#draft").children("option:selected").val(),
							'ans1': $("input[name=inputAnswer]").val(),
							'ans2': $("input[name=inputAnswer1]").val(),
							'ans3': $("input[name=inputAnswer2]").val(),
							'ans4': $("input[name=inputAnswer3]").val()
						},
					success: function (data)
					{ 
						console.log(data);
						if(data.success==0)
							showError(data.message);
						else
						{
							showSuccess(data.message);
							 $("input[name=inputQuestion]").val('');
							  $("input[name=inputCorrect]").val('');
							   $("input[name=inputAnswer]").val('');
							   $("input[name=inputAnswer1]").val('');
							   $("input[name=inputAnswer2]").val('');
							   $("input[name=inputAnswer3]").val('');
							   $("#time").val($("#time option:first").val());
							   $("#draft").val($("#draft option:first").val());
							   updatingCounter(filename);
						}
						scrollToTop();
						 
					},
					error: function(xhr, status, error)
					{
						console.log(error);
						showError("Error Occurred"+error);
					}
		  });
 }
 function updatingCounter(filename){
	 var counter=5;
	 $('#counter').html(''+(counter+1));
	 setInterval(function()
	{ 
		$('#counter').html(''+counter); 
		if(counter<=0)
		{
			if(filename.includes('admin.php?question_edit'))
				location.href="admin.php?questions_view";
			else if(filename.includes('admin.php?admin_add'))
				location.href="admin.php?admin_add";
		}
		counter--;
	}, 1000);
 }
  //Register Admin
  function reqAddAdmin()
 {
	if(checkForm())
	{
		ajaxCall_register_admin();
	}
 }
 function ajaxCall_register_admin()
 {
	
	$.ajax({ 
					type: 'POST', 
					url: base_url + 'register_admin.php',  
					dataType: 'json',
					data:{
							'email':$('input[name=email]').val(),
							'password':$('input[name=password]').val(),
							'name':$('input[name=name]').val(),
							'cid':user.cid
						},
					success: function (data)
					{ 
						if(data.success==0)
							showError(data.message);
						else
						{
							showSuccess(data.message);
							updatingCounter(filename);
						}
						scrollToTop();
					},
					error: function(error)
					{
						console.log(error);
						showError("Failed to Register "+error);
					}
		  });
 }