<?php 
  include('DatabaseConnection.php');


		$title=$_POST['title'];
		$category=$_POST['category'];
		$content=$_POST['content'];
		$bloggername=$_POST['bloggername'];
		
		
        
		//create a query
		$sql = "INSERT INTO blogpost(title,category,content,bloggername) 
		          VALUES 
		       ('$title','$category','$content','$bloggername')";

       
  			if ($connection->query($sql) === TRUE) 
  			{

			 header("location: Home.php");
		     echo "New record created successfully";
		    }
		    else 
		    {
		     echo "Error: " . $sql . "<br>" . $connection->error;
		    }

		    //close connection
		    $connection->close();
 ?>

