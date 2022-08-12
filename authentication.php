<?php 
session_start();
$con=mysqli_connect('localhost','root','','test');
$username=$_POST['name'];
$password=$_POST['pwd'];
$role="";
 $message="";
if(isset($_POST['submit']))
{
    $query="SELECT * FROM login where username='$username' AND  password='$password'";
    $result=mysqli_query($con,$query);
    if (mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
          if($row['role']=="Admin")
          {
$_SESSION['User']=$row['username'];
$_SESSION['role']=$row['role'];
header('Location:admin.php');
          }
          else {
            $_SESSION['User']=$row['username'];
            $_SESSION['role']=$row['role'];
            header('Location:client.php')  ;
        }
        }
    }
    
   else{
       header('Location:login.php');
    
   } 
}








    

?>