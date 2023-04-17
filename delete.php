<?php

include 'main.php';

$id = $_GET['id'];

$q = "DELETE FROM curdtable WHERE `curdtable`.`id` = $id";

mysqli_query($conn,$q);

header('location:display.php');

?>