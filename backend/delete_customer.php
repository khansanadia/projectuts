<?php 
include_once("database.php");

$db->query("DELETE FROM customer WHERE id='$_GET[id]'");
header("location: list_customer.php");


?>


