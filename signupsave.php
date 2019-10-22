<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	//$gen = $_POST['gender'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confpassword = $_POST['conpassword'];
	$validate = strcmp($password,$confpassword);
	$email = $_POST['email'];
	$contact = $_POST['ctno'];
	$country = $_POST['country'];
	$college = $_POST['college'];
	if(empty($fname) || empty($lname) || empty($username) || empty($password) || empty($confpassword) || empty($email) || empty($contact) || empty($country) || empty($college))
	{
		echo"Please don't leave any field you have to fill all of them to get registered with us";
	}
	else
	{
		if($validate!=0)
		{
			echo $validate;
			//onClick("Passwords ahould be match");
			//echo onclick="alert('Well Done')" ;
			//echo"Password same hone chahiye bhaiya aise to baat nhi banegi";
			header("Location:passwordmatch.html");
		}
		else{
			$conn = mysqli_connect('localhost','root','','ugcapi');
			// Check connection
			if ($conn) {
				echo "Connected successfully<br>";
				$qur = "insert into newuser values('$fname','$lname','$username','$password','$email','$contact','$country','$college')";
				$save = mysqli_query($conn,$qur);	
				if($save)
				{
					header("Location:successfullwritedatabase.html");
				}
				else
				{
					//echo"There is some problem with the Database";
					header("Location:datastore_error.html");
				}
			}
			
			else{
				echo "Connection failed: " . mysqli_connect_error();
			}
		}
	}
	
?>