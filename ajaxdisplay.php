
  

    <?php 
$con=mysqli_connect('localhost','root','','test');
    $sql="SELECT * FROM details";
    $query=mysqli_query($con,$sql);
    if(mysqli_num_rows($query)>0)
    {
        while($row=mysqli_fetch_array($query)){
            ?>


	
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['fullname'];?></td>

<td><?php echo $row['appname'];?></td>    
<td><?php echo $row['appplatform'];?></td>
<td><?php echo $row['email'];?></td>
    <td><?php echo $row['description'];?></td>
    <td><img src="<?php echo $row['image'];?>" width="100px"></td>
<td> <button style="background-color:red;border-radius:5px;" id="deleteash"  data-id='<?php $row['id'];?>'onclick="loaddoc();">
delete</button>
        </tr>



            <?php
        }
    }
    ?>
    




