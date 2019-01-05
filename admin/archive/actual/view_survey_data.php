<style>
#myInput,#sel1 {

    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
   padding: 7px 20px 7px 40px;
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}
#cn
{
margin-bottom: -50px;position: absolute;right: 57px;top: 15px;
}
@media screen and (max-width:980px)
{
#cn
{
margin-bottom: -50px;position: absolute;left: 0px;top: 0px;
}
}
#myInput
{
    background-image: url('./styles/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 7px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
}
#sel1
{
  width:fit-content;
   margin-left:-31px;
    padding-top: 15px;
    background-color: aliceblue;
    padding: 10px 0px 7px 0px;
}
.table>thead>tr>th {
    vertical-align: bottom;
    border-bottom: 2px solid #ddd;
    min-width: 80px;
}
.page-header
{
border: 0px;
    box-shadow: 0px 2px 0px orange;
    text-align: center;
    text-shadow: 1px 2px 1px navajowhite;}
#a{
	color: white;
    background: rgba(255,0,0,.78);
}
@media screen and (max-width:990px)
{

}
</style>
<div class="" >

	<div class="col-md-12">
	<h1 class="page-header">Survey</h1>
		  <div class="table-responsive">          
  <table class="table table-hover table-bordered" id="myTable">
    <thead>
      <tr class="warning">
        <th id="a">Survey ID</th>
        <th id="a">Name</th>
        <th id="a">Father Name</th>
        <th id="a">Date Of birth</th>
        <th id="a">CNIC</th>
        <th id="a">Gender</th>
        <th id="a">Cast</th>
        <th id="a">Religion</th>
        <th id="a">Education</th>
        <th id="a">Age</th>
        <th id="a">No of childrens</th>
        <th id="a">Admin Name</th>
        <th id="a">Phone Number</th>
        <th id="a">Marital Status</th>
        <th id="a">Place of issuence</th>
        <th id="a">CNIC Expiry</th>
        <th id="a">Skill</th>
        <th id="a">Employee Status</th>
        <th id="a">Willing for Employement</th>
        <th id="a">Availablity</th>
        <th id="a">Remarks</th>
      </tr>
    </thead>
 <?php
	include("conn/conn.php");
	$get_data="Select * from surveydata";
	$run_q=mysqli_query($conn,$get_data);
	while($row=mysqli_fetch_array($run_q)){
		$s_id=$row['id'];
    $s_name=$row['name'];
    $s_fn=$row['fatherName'];
    $s_dob=$row['dob'];
    $s_cnic=$row['cnic'];
    $s_gender=$row['gender'];
    $s_cast=$row['cast'];
    $s_religion=$row['religion'];
    $s_education=$row['education'];
    $s_age=$row['age'];
    $s_no_of_children=$row['no_of_children'];
    $s_AdminName=$row['AdminName'];
    $s_phonenumber=$row['phonenumber'];
    $s_maritalStatus=$row['maritalStatus'];
    $s_place_of_issuence=$row['place_of_issuence'];
    $s_cnic_expiry=$row['cnic_expiry'];
    $s_skill=$row['skill'];
    $s_employee_status=$row['employee_status'];
    $s_willing_for_emp=$row['willing_for_emp'];
    $s_availabilty=$row['availabilty'];
    $s_remarks=$row['remarks'];
  

		


    echo "<tbody>
     <tr>
        <td>$s_id</td>
        <td>$s_name</td>
        <td>$s_fn</td>
        <td>$s_dob</td>
        <td>$s_cnic</td>
        <td>$s_gender</td>
        <td>$s_cast</td>
        <td>$s_religion</td>
        <td>$s_education</td>
        <td>$s_age</td>
        <td>$s_no_of_children</td>
        <td>$s_AdminName</td>
        <td>$s_phonenumber</td>
        <td>$s_maritalStatus</td>
        <td>$s_place_of_issuence</td>
        <td>$s_cnic_expiry</td>
        <td>$s_skill</td>
        <td>$s_employee_status</td>
        <td>$s_willing_for_emp</td>
        <td>$s_availabilty</td>
        <td>$s_remarks</td>

      
      </tr>
    </tbody>";

    }
    ?>
  </table>
  </div>

	</div>

<div class="col-md-4 col-xs-12" id="cn">
<div class="col-xs-7">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Filter by..">
</div>
<div class="col-xs-2">
  <select id="sel1" onchange="val()">
    <option>ID</option>
    <option>NAME</option>
    <option>FATHER NAME</option>
    <option>DOB</option>
<option>CNIC</option>
    <option>GENDER</option>
    <option>CAST</option>
    <option>RELIGION</option>
<option>EDUCATION</option>
    <option>AGE</option>
    <option>No of childrens</option>
    <option>Admin Name</option>
<option>Phone Number</option>
    <option>Marital Status</option>
    <option>Place of issuence</option>
    <option>CNIC Expiry</option>
<option>Skill</option>
    <option>Employee Status</option>
    <option>Willing for Employement</option>
    <option>Availablity</option>
<option>Remarks</option>
  </select>
</div>
</div>
</div>
<script>
var index=0;
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  // Loop through all table rows, and hide those who don't match the search query
if(filter!="")
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[index];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1 && td.innerHTML.toUpperCase()==filter) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
else
 for (i = 0; i < tr.length; i++) {
  
        tr[i].style.display = "";
  }
}


function val() {
var d = document.getElementById("sel1").value;
/*if(d.toLowerCase()=="id")
index=0;
else if(d.toLowerCase()=="name")
index=1;
else if(d.toLowerCase()=="father name")
index=2;
else if(d.toLowerCase()=="dob")
index=3;*/
index=document.getElementById("sel1").selectedIndex;
myFunction();
}

</script>
