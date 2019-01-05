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
td ul
{
	text-align: left;
    font-size: 13px;
}

</style>


<div class="container" >
	<h1 class="page-header">Users</h1>
	<div class="col-md-10 col-md-offset-1">
		  <div class="table-responsive">          
  <table class="table table-hover table-bordered" id="myTable">
    <thead>
      <tr class="warning">
        <th id="a">Questions</th>
      </tr>
    </thead>
 <?php
	include("conn/conn.php");
	$get_u="Select * from questions";
	$run_u=mysqli_query($conn,$get_u);
	while($row=mysqli_fetch_array($run_u)){
		$s_id=$row['question'];
		$ans1=$row['ans1'];
		$ans2=$row['ans2'];
		$ans3=$row['ans3'];
		$ans4=$row['ans4'];
		$ans5=$row['ans5'];
		$time=$row['time'];
    echo "<tbody>
     <tr>
        <td>
		<b>$s_id</b> <span style=\"float: right\">$time</span>
		<ul>
			".(($ans1!='')? '<li>'.$ans1.'</li>':'')."
			".(($ans2!='')? '<li>'.$ans2.'</li>':'')."
			".(($ans3!='')? '<li>'.$ans3.'</li>':'')."
			".(($ans4!='')? '<li>'.$ans4.'</li>':'')."
			".(($ans5!='')? '<li>'.$ans5.'</li>':'')."
			
		</ul>
		</td>
      </tr>
    </tbody>";

    }
    ?> 
  </table>
  </div>

	</div>
</div>

