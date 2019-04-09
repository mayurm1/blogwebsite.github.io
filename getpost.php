 
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
   <?php include('header_Homepage.php');?>

<?php  
   include('DatabaseConnection.php');
     $categoryName=$_POST['categoryname'];
    //create a query
      $sql = "SELECT *FROM blogpost WHERE category ='$categoryName'";   
    //excecute Query
    $result = $connection->query($sql);
  
    //close connection
    $connection->close();

?>

          
<?php

     if(mysqli_num_rows($result)>0)
      {
         while($row=mysqli_fetch_array($result))
       {  
?>
            
        
                <div class="container-fluid ">
                  <div class="row">
                  	<div class="col-sm-2 ">
                     
                    
                    </div>
                  	<div class="col-sm-8" style=" background-color: lightblue">
                  	
                  	      <label><h3>Title :</h3></label>
                  		     <h3>
                              <?php echo $row['title']; ?>
                            </h3>
                             <br>
                           <label><h3>Category :</h3></label>
	                         <h6>
	                         <?php echo $row['category']; ?>
                     	     </h6>
                             <br>
                          <label><h3>Description :</h3></label>
		                      <p>
		                        <?php echo $row['content']; ?>
		                      </p>
                              <div class="make-right">  
                              	<?php echo $row['bloggername']; ?>
                              </div>
                        
                         <h6>******************************************************************************************</h6> 
                   
                  </div>
                                  

                  <div class="col-sm-2"></div>
                </div>
              </div>
              
       
  <?php
       }
      
   }
  ?>
  <div class="footer bg-primary">
  <p><?php



echo  "@".date('Y') ; echo "Created by" ;echo "<a  style='color:white' href='#'>@facebook</a>";
?></p>
</div>
   </body>
   </html>  
