<?php 
include_once('config.php');
$deleteid=$_GET['did'];
echo $query="DELETE  FROM `user_data` WHERE `id`='$deleteid'";
if(mysql_query($query)){
	header('location:index.php');
}
else{
	mysql_error();
}
?>