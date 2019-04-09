<?php
session_destroy(); // Is Used To Destroy All Sessions
//Or
if(isset($_SESSION['emailid']))
unset($_SESSION['emailid']);  //Is Used To Destroy Specified Session 

header('location:login.php');
?>