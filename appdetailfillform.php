<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> <link href="bootstrap.min.css" rel="stylesheet">
<style>
    .container
    {
        border:3px solid grey;
        margin-top: 50px;
    }
    .container-fluid{
        padding: 5px;
    }

    body{
        background-image: url('images/background-2462431_1920.jpg');
    }
</style>

</head>
<body>

    <form id="myform" action="admininsert.php" method="POST" enctype="multipart/form-data" > 
<div class="container">
    <h2 class="text-center  text-white text-decoration-underline bg-dark"> App Details Filling Form</h2>
    <div class="row">   
   
<div class="col-md-3">

</div>


        <div class="col-md-6">
        <div class="form-inline ">
            <label for="name">Full Name:</label>
            
    <div class="form-group">
       
    <select class="form-control">
        <option value="Mr">Mr</option>
        <option value="Mr">Mrs</option>
    </select>
</div>
<div class="form-group">
   
    <input type="text" name="name" id="name" class="form-control" style="width:400px;">
</div>
</div>


<div class="form-group">
    <label>Email:</label>
    <input type="text"  name="email" placeholder="enter mail id" class="form-control">
</div>
<div class="form-group">
    <label>phone number</label>
    <input type="number"  name="phno" placeholder="enter phone number" class="form-control">
</div>
<div class="form-group">
    <label>App Name</label>
    <input type="text"  name="appname" placeholder="enter name" class="form-control"  >
</div>
<div class="form-group">
    <label>Platform</label>
    <input type="text" name="appplatform" placeholder="Android/ios" class="form-control"  >
</div>

<div class="form-group">
    <label>image</label>
    <input type="file" placeholder="Enter the file" name="image" class="form-control-file" >
</div>
    <div class="form-group">
        <label>Description or wrorking</label>
    <textarea type="text" name="description"  id="description"class="form-control" rows='4'  ></textarea>
    </div>


<hr>
<h6 class="text-dark text-center text-decoration-underline">Payment Details</h6>
<div class="form-group">
    <input type="number" placeholder="card number" name="cardno" class="form-control">
</div>
<div class="form-group">
    <input type="text" placeholder="name on card" name="cardname" class="form-control">
</div>

<div class="form-inline" >
    <input type="datetime" placeholder="Date of Expiry" name="doe" class="form-control" style="width:300px;">

    <input type="number" placeholder="cvv" name="cvv" class="form-control"> 
</div>


<br>
<br>
<input type="submit"  id="submit" name="submit" value="submit" class=" btn-dark" style="width:100%;">

    </div>
    
    <div class="col-md-3">
      
    </div>
    
    </div><!---row -->
</div><!--container-->

   


      
    </form>





    
</body>
</html>