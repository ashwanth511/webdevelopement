<?php 
session_start();
if(isset ($_SESSION['role']))
{
    if($_SESSION['role']!='Admin')
    {
        header('Location:client.php');
    }

}
else {
    header('Location:login.php');
}

//if the user is not an  admin whiles session
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="bootstrap.min.css">
   
  <script src="jquery-3.5.1.min.js"></script>
 <style>


body{
background-image:url('images/admin.jpg');
}


</style>
  <script src="ajaxdatabase.js"></script>
</head>

<body>
<div class="container bg-success bg-gradient">
    <h1 class="text-danger text-center text-decooration-underline">  Welcome Admin</h1>

<button id="dataentry" class="btn btn-primary">Enter the data</button>
<button type="button" id="datadisplay" class="btn btn-danger">To display the data </button>
   
</div>
<div class="row">
<div class="col-md-3" >
 


</div>
<div class="col-md-6">
<p id="datashow"></p>

</div>
<div class="col-md-3">
</div>
</div>

    <div class="container border-danger">
        <h1> Data Entered</h1>

       
        <table class="table table-bordered table-dark">
            <thead>
                <th>ID</th>
                <th>Developer Name</th>
                <th>App Name</th>
                <th>App platform</th>
                <th>Contact Developer</th>
                <th>Description</th>
               <th>image</th>
               <th>Delete</th>
            </thead>
            <tbody id="response">
			
            </tbody>
            
                </table> 
</div>

<marquee><a href="index.php" class="text-deocration-underline">To Go Back To MainPage</a></marquee> 
</body>
</html>