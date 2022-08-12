<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<link rel="stylesheet" href="bootstrap.min.css">
<script src="jquery-3.5.1.min.js"></script>
<style>
   .contain{
       border:1px solid black;
        width:800px;
        padding:10px;
        margin-top: 30px;
         
    }
    body{

background-color:grey;

    }
</style>
</head>
<body>


<h5 class="text-center font-weight-bold" style="font-size:50px;" >Welcome to AppLx</h5>
<div class="container-fluid contain ">

   <div class="row">
    <div class="col-md-6 mb-3">
        <nav class="navbar bg-dark  navbar-center">

            <ul class="navbar-nav  text-center mr-auto">
                <li class="nav-item">
                    <a  class="nav-link text-end text-white " style="text-align:center;">Login
                        
                    </a>
                </li>
            </ul>
        </nav>
   
<form action="authentication.php" method="POST">
    <br>
  
    <div class="form-group">
    <label>Username:</label>
<input type="text" class="form-control" name="name" id="name" aria-placeholder="Enter Username">
</div>
<div class="form-group">
<label>Password:</label>
<input  type="text" class="form-control" name="pwd"  id="pwd" aria-placeholder="Enter Username">
</div>

<br>
<input type="submit" name="submit"  value="submit"  style="width:350px; border-radius:20px"class="btn btn-primary">
</form>
        
    </div>



    <div class="col-md-6 mb-3">
       <img src="images/signup-image.jpg" class="float-left">
        
    </div>
   </div>
  



</div>




       
</body>
</html>