<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  
<style >
    
     .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;
}
  </style>
</head>
<body>

<?php include('header.php');?>
 
  
  <form action="getlogin.php" method="post">
   <div class="container-fluid "  style="margin-top: 10px">
    <div class="row">
     <div class="col-sm-3"></div>
     <div class="col-sm-6 jumbotron">
      <h3>Login Your Account</h3>
      
      <input type="text" class="form-control" style="margin-bottom: 10px" placeholder="Username" name="emailid">
      <input type="password" class="form-control mt-2" style="margin-bottom: 10px" placeholder="Password" name="password">
      <input type="submit" class="btn btn-primary" value="login" name=""><br>
       <a href="registration.php" style="color: royalblue">Register here</a>
       <br>
      <a href="forgotpassword.php" style="color: royalblue">Forgot Password </a>

     </div>
     <div class="col-sm-3"></div>
    </div>
   </div>
   </form>
<div class="footer bg-primary">
  <p><?php



echo  "@".date('Y') ; echo "Created by" ;echo "<a  style='color:white' href='#'>@facebook</a>";
?></p>
</div>
</body>
 
</html>