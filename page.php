<?php
require_once("db.php");
if($connection == false){
	echo "Error!";
	echo mysqli_connect_errno();
	exit();
}
$page = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM $dbarticles WHERE id='$page' ");
?>
