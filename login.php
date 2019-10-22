<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	echo $username. "<br>" .$password;
	$conn = mysqli_connect('localhost','root','','ugcapi'); // $conn returns the boolean value True/False
	if($conn)
	{
		//$query1 = "select * from newuser where Username=$username AND Password=$password";
		$query1 = mysqli_query($conn,"select * from newuser where Username='$username' AND Password='$password'");
		$row = mysqli_fetch_array($query1);
		/*while ($row = mysqli_fetch_array($query1)) 
		{
			echo "Username: ".$row["Username"];
		}*/
		
		//This is also working.
		//$var = $conn->query($query1);
		
		//$row!=0	
		if($row==TRUE)
		{
			echo "Hello";
			header("location:project.html");
		}
		else
		{
			echo "Please input valid credentials";
		}
		/*while($row = $var->fetch_assoc());
		{
			header(Location:project.html);
			echo $row["Username"];
			//echo $var1;
		}*/
	}
	else 
	{
		echo "Connection Failed";
	}
	
	//echo $char;
?>