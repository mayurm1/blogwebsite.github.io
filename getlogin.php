<?php
 
      //include database connecton file
      include('DatabaseConnection.php');
      
      //get emailid and password form input fields      
      $userName = $_POST['emailid'];
      $passWord = $_POST['password']; 

     
      
      //create query
      $sql = "SELECT emailid ,password FROM reader_registration WHERE emailid = '$userName' and password = '$passWord'";

      // Perform query
       $result=$connection->query($sql);
  
      // If result matched $userName and $passWord, table row must be 1 row
      if($result->num_rows == 1)
      {

         //redirect to the main page after login
         header("location: Home.php");
      }
      else 
      { 
         $passwordErr="invalid password";
      }
   
 ?>
