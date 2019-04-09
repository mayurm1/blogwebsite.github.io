 <!--Header-->  
<nav class="navbar navbar-expand-md bg-primary navbar-primary sticky-top" style="height: 80px">
  <a class="navbar-brand" style="color: white" href="Home.php">BlogSite</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
     
      <li class="nav-item">
        <a class="nav-link" style="color: white" href="Home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white" href="logout.php">Logout</a>
      </li>    
    </ul>
    <form action="getpost.php" method="post">
    <div class="container">
      <div class="row">
         
            <div class="col-sm-8"> 
             <input type="text" class="form-control" placeholder="search" name="categoryname">
            </div>
           <div class="col-sm-2">
            <input type="submit" style="margin-left: 10px" value="search" class="btn btn-danger" name="" >
           </div>
            
    
    </div>
  </div>

       </form>
  </div>  
</nav>


