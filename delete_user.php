<?php 
include("connection.php");
$id1 = $_GET['id'];
$sql = "DELETE FROM information WHERE Unicef_id='$id1'";
mysql_query($sql);
header('location:adminpage.php');
?>