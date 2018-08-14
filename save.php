<?php 
include_once('config.php');

switch ($_REQUEST['action']) {
 
	  case "save":
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
print_r($name);
print_r($email);
print_r($phone);
print_r($address);

$query="INSERT INTO `user_data` (`id`, `name`, `email`, `phone`, `address`, `status`) VALUES (NULL, '$name', '$email', '$phone', '$address', 'Y')";
if(mysql_query($query)){
   header('location:index.php');
}
else{
	mysql_errno();
}


    break;



case "edit":
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$ids=$_POST['editid'];
 
echo $query="UPDATE `user_data` SET `name`='$name',`email`='$email', `phone`='$phone', `address`='$address' WHERE `id`=$ids";
if(mysql_query($query)){
   header('location:index.php');
}
else{
	mysql_errno();
}
    ?>



















    <?php
   
               default:
               echo 'no';
         }
     
 ?>