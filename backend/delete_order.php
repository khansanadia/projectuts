<?php 
include_once("database.php");

$db->query("DELETE FROM order WHERE id='$_GET[id]'");
header("location: list_order.php");


?>


