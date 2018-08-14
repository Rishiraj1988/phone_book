<?php   global $con;
$conn = mysql_connect('localhost', "root", "");
if (!$conn) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db("phone_book", $conn);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}

$con =    new mysqli('localhost', "root", "","phone_book"); 
 if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
?>
