

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 
     .row{
         display:flex;
     }

     .imgl{
width:300px;
height:250px;
        }
        .container{
           
            background-color:grey
        }
    
.hola{
        text-align:left;
    }
    .card{
		width:300px;
        
    }
        
    </style>
        <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

    <?php 
$con=mysqli_connect('localhost','root','','test');
    $sql="SELECT * from details";
    $query=mysqli_query($con,$sql);
    if(mysqli_num_rows($query)>0)
    {
        while($row=mysqli_fetch_array($query)){
            ?>


<div class="container-fluid">







<table class="table">
    <tr>
        <td>

        <div class="container">
            <div class="row">

                <div class="col-md-4 ">
                            <img src="<?php echo $row['image'];?>"   class="imgl" >
                </div>

                <div class="card col-md-4" style="background-color:white">

                <div class="card-header">App Details
                </div>
<div class="card-body">
<h5 class="card-title"><?php echo $row['appname'];?></h5>
<p class="card-text">
<?php echo $row['description'];?></p>
&nbsp<?php echo $row['appplatform'];?>
<div class="card-footer">Developed By:<?php echo $row['fullname'];?>
</div>
</div>
 </div>

                    <div class="card col-md-4" style="background-color:black">


<div class="card-header text-white">Developer-Details</div><hr style="background-color:white;">
        <div class="card-body text-white">
        <h6 class="card-title"><?php echo $row['email'];?></h6>
<p class="card-text">
Contact No:<?php echo $row['phno'];?></p>


        </div>
<div class="card-footer"></div>
</div>
                

            </div>
        </div>
        </td>
        </tr>
        </table>

    

        </div>


            <?php
        }
    }
    
    ?>


</body>
</html>


