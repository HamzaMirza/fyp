	<?php
		header('Content-Type: application/json');
		function test_input($data)
		{
			if($data!='')
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
			}
			return $data;
		}
	    require_once __DIR__ .'/config.php';
				$response = array();
		$response["success"] = 0;
		$response["message"] = "";
	
		$name="none";
		$fatherName="none";
		$dob="none";
		$cnic="none";
		$gender="none";
		$cast="none";
		$religion="none";
		$education="none";
		$age="none";
		$no_of_male_children="none";
		$no_of_female_children="none";
		$AdminName="none";
		$maritalStatus="none";
		$phonenumber="none";
		$place_of_issuence="none";
		$cnic_expiry="none";
		$skill="none";
		$willing_for_emp="none";
		$employee_status="none";
		$availabilty="none";
		$remarks="none";
		$longitude="none";
		$latitude="none";
		$image="none";
		foreach($_REQUEST as $key => $item)
		{
			if($key=='name')
				$name=$item;
			else if($key=='fatherName')
				$fatherName=$item;
			else if($key=='dob')
				$dob=$item;
			else if($key=='cnic')
				$cnic=$item;
			else if($key=='gender')
				$gender=$item;
			else if($key=='cast')
				$cast=$item;
			else if($key=='religion')
				$religion=$item;
			else if($key=='education')
				$education=$item;
			else if($key=='age')
				$age=$item;
			else if($key=='no_of_male_children')
				$no_of_male_children=$item;
			else if($key=='no_of_female_children')
				$no_of_female_children=$item;
			else if($key=='AdminName')
				$AdminName=$item;
			else if($key=='maritalStatus')
				$maritalStatus=$item;
			else if($key=='phonenumber')
				$phonenumber=$item;
			else if($key=='place_of_issuence')
				$place_of_issuence=$item;
			else if($key=='cnic_expiry')
				$cnic_expiry=$item;
			else if($key=='willing_for_emp')
				$willing_for_emp=$item;
			else if($key=='skill')
				$skill=$item;
			else if($key=='employee_status')
				$employee_status=$item;
			else if($key=='availabilty')
				$availabilty=$item;
			else if($key=='remarks')
				$remarks=$item;
			else if($key=='longitude')
			        $longitude=$item;
			else if($key=='latitude')
			        $latitude=$item;  
			else if($key=='image')
			        $image=$item;       	
		}
			
			 if($name=="none"&&$fatherName=="none"&&$gender=="none"&&$dob=="none" &&$cnic=="none" &&$cast=="none"&& $religion=="none"&& $education=="none"&& $age=="none"&&$no_of_male_children=="none"&&$no_of_female_children=="none"&& $AdminName=="none"&& $phonenumber=="none"&& $maritalStatus=="none"&& $place_of_issuence=="none"&& $cnic_expiry=="none"&& $skill=="none"&& $employee_status=="none"&& $willing_for_emp=="none"&& $availabilty=="none"&& $remarks=="none"&& $longitude="none"&& $latitude="none"&& $image="none")
			{
				$j="";
				foreach($_REQUEST as $key => $item)
				{
					$j=json_decode($key);
					if($j=="")
						$j=json_decode($item);
				}
			
					foreach($j as $key => $item)
						{
							//echo $key;
							if($key=='name')
								$name=$item;
							else if($key=='fatherName')
								$fatherName=$item;
							else if($key=='dob')
								$dob=$item;
							else if($key=='cnic')
								$cnic=$item;
							else if($key=='gender')
								$gender=$item;
							else if($key=='cast')
								$cast=$item;
							else if($key=='religion')
								$religion=$item;
							else if($key=='education')
								$education=$item;
							else if($key=='age')
								$age=$item;
							else if($key=='no_of_male_children')
								$no_of_male_children=$item;
							else if($key=='no_of_female_children')
								$no_of_female_children=$item;
							else if($key=='AdminName')
								$AdminName=$item;
							else if($key=='maritalStatus')
								$maritalStatus=$item;
							else if($key=='phonenumber')
								$phonenumber=$item;
							else if($key=='place_of_issuence')
								$place_of_issuence=$item;
							else if($key=='cnic_expiry')
								$cnic_expiry=$item;
							else if($key=='willing_for_emp')
								$willing_for_emp=$item;
							else if($key=='skill')
								$skill=$item;
							else if($key=='employee_status')
								$employee_status=$item;
							else if($key=='availabilty')
								$availabilty=$item;
							else if($key=='remarks')
								$remarks=$item;
			                                else if($key=='longitude')
			                                        $longitude=$item;
			                                else if($key=='latitude')
			                                        $latitude=$item;
							else if($key=='image')
			                                        $image=$item;	
						}
		
			}
			else if($name=="none"||$fatherName=="none"||$gender=="none"||$dob=="none")
			{
				$response["message"] ="name,fatherName,gender,date of birth data are required";
				echo json_encode($response);
				exit();
			}

                       $binary=base64_decode($image);
                       header('Content-Type: bitmap; charset=utf-8');
                       $imagePath = '../user_images/'.sha1(md5($image)).'.jpeg'; 
                       $file = fopen($imagePath, 'w');
                       fwrite($file, $binary);
                       fclose($file);
			//echo "'".$name."','".$fatherName."','$dob','$cnic','$gender','$cast','$religion','$education','$age','$no_of_children','$maritalStatus','$phonenumber','$AdminName','$place_of_issuence','$cnic_expiry','$skill','$employee_status','$willing_for_emp','$availabilty','$remarks')";
			
			$query="INSERT INTO `surveydata`(`id`, `name`, `fatherName`, `dob`, `cnic`, `gender`, `cast`, `religion`, `education`, `age`, `no_of_male_children`,`no_of_female_children`, `AdminName`, `phonenumber`, `maritalStatus`, `place_of_issuence`, `cnic_expiry`, `skill`, `employee_status`, `willing_for_emp`, `availabilty`, `remarks`,`longitude`,`latitude`, `image`) VALUES ('','$name','$fatherName','$dob','$cnic','$gender','$cast','$religion','$education','$age','$no_of_male_children','$no_of_female_children','$AdminName','$phonenumber','$maritalStatus','$place_of_issuence','$cnic_expiry','$skill','$employee_status','$willing_for_emp','$availabilty','$remarks','$longitude','$latitude','$imagePath')";
			
			$run_qu=mysqli_query($connection,$query);
			if($run_qu)
			{
				$response["success"] = 1;
				$response["message"] = "data inserted";
			}
			else
			{
				$response["success"] = 0;
				$response["message"] = "failed to insert data";
				echo mysqli_error($connection);
			}
						
		 echo json_encode($response);
		 exit();
		
	?>
