<?php 
session_start();

//if the user is not an  admin whiles session
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery-3.5.1.min.js"></script>
   

    <script>
    function loadpic(){
        $.ajax({
        
            url:'clientdisplay.php',
            type:"POST",
            success:function(getdata){
    $('#hello').html(getdata);
    
            }
        });
    }
    loadpic();
</script> 
   
</head>
<body style="background-color:grey;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"
   <div class="container-fluid">
    <div class="collapse navbar-collapse">
        <a class="navbar-brand" href="#"><img src="https://img.icons8.com/material/64/000000/mac-os.png"/></a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <button type="button" class="btn btn-primary" onclick="window.location.href='index.php'" >
  Logout
</button>
<button type="button" class="btn btn-primary" onclick="window.location.href='#aboutus'" >
  About us
</button   
     <ul class="navbar-nav">
     <li class="nav-link text-center"  style="text-align:center;">AppLx</li>
     </ul>   
       
    </div>
   </div> 
</nav>



<div class="container" id="hello">
</div>



<footer class="page-footer bg-dark" id="aboutus">
  <div class="row">
    <div class="col-md-4 text-center text-white">
      <span class="glyphicon glyphicon-envelope text-decoration-underline"><i class="fas fa-user-alt"></i>About Us</span>
<p> we are convinced that the digital space is an invaluable tool for bringing transparency and equity to the art market.<br>
	We provide artists with the tools that enable them to independently manage the sale of their works. Our team is working around the clock, committing their energy to promoting Singulart artists to a global audience.</p>
</div>
<div class="col-md-6 text-center text-white ">
<span class="fas fa-phone text-decoration-underline">Contact Us</span>
<p>In Order To post Your APP on Our websiteplease do contact the site adminor send the app details  to
admin <span  style="color:black">admin@gmail.com</span></p>
</div>
<div class="col-md-2">
  <h6 class="text-decoration-underline text-white">Our Team</h6>
 <h6>Ashwanth</h6>
 <h6>Arbaaz</h6>
 <h6>Hassan</h6>
</div>

    </div>
  
    <div class="contaier-fluid">
      <div class=" text-center bg-dark text-white">
        <p class="text-muted mb-0 py-2">© 2019 BBBootstrap All rights reserved For Ashwanth.</p>
      </div>
    </div>
     
   
</footer>
    



    











    
      <!--  <table class="table table-bordered table-dark">
<thead>
    <th>ID</th>
    <th>description</th>
   
</thead>
<tbody id="hello">
</tbody>

    </table>-->



   

   
</body>
</html>