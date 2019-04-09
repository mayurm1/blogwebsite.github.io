<?php
        //include database connecton file
		include('DatabaseConnection.php');
		
		//get data from input fields
		
		$firstName=$_POST['firstname'];
		$lastName=$_POST['lastname'];
		$gender=$_POST['gender'];
		$birthDate=$_POST['birthdate'];
		$emailId=$_POST['emailid'];
		$mobileNumber=$_POST['mobileno'];
		$passWord=$_POST['password'];
		$retypePassword=$_POST['retypepassword'];
		
        
		//create a query
		$sql = "INSERT INTO registration(firstname,lastname,gender,birthdate,emailid,mobileno,password) 
		          VALUES 
		       ('$firstName','$lastName','$gender','$birthDate','$emailId','$mobileNumber','$passWord')";

       
		       

		//excecute Query
		if($passWord == $retypePassword)
		{
			
  			if ($connection->query($sql) === TRUE) 
  			{

			 header("location: Home.php");
		     echo "New record created successfully";
		    }
		    else 
		    {
		     echo "Error: " . $sql . "<br>" . $connection->error;
		    }
		}
		else
		{
			header("location:Home.php");

		}

		//close connection
		$connection->close();
?>
