<style>

#myTable{text-align:center;}
.table>thead>tr>th {
    vertical-align: bottom;
    border-bottom: 2px solid #ddd;
    min-width: 80px;
text-align:center;
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

</style>


<div class="container" >
	<h1 class="page-header">Users</h1>
	<div class="col-md-10 col-md-offset-1">
		  <div class="table-responsive">          
  <table class="table table-hover table-bordered" id="myTable">
    <thead>
      <tr class="warning">
        <th id="a">User ID</th>
        <th id="a">User Name</th>
      
        
      </tr>
    </thead>
 <?php
	include("conn/conn.php");
	$get_u="Select * from admin";
	$run_u=mysqli_query($conn,$get_u);
	while($row=mysqli_fetch_array($run_u)){
		$s_id=$row['id'];
    $s_userName=$row['userName'];

    echo "<tbody>
     <tr>
        <td>$s_id</td>
        <td>$s_userName</td>
  
      </tr>
    </tbody>";

    }
    ?> 
  </table>
  </div>

	</div>
</div>

