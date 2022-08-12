<?php
  $con=mysqli_connect('localhost','root','','test');
    extract($_POST);
if(isset($_POST['submit']))
{


  $file=$_FILES['image'];
  
    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    $fileerror=$file['error'];

  $destfile='upload/'.$filename;
  echo "$destfile";
  move_uploaded_file($filepath,$destfile);
  $query="INSERT INTO  details (fullname,email,phno,appname,appplatform,description,image) values ('$name','$email',$phno,'$appname','$appplatform','$description','$destfile')";
 $newquery="INSERT INTO payment(cardname,cardno) values('$cardname','$cardno')";
  $result=mysqli_query($con,$query);
  $resul=mysqli_query($con,$newquery);
 if($result&&$resul)
 {
  header('Location:admin.php');
 }

 else {
  echo mysqli_error($con);
}
}


else {
  echo "no connection";
}







?>