<?php 
include_once 'php/config.php';
session_start();

$sql= mysqli_query($conn,"SELECT * FROM result where unique_id = '{$_SESSION['unique_id']}'");
$row = mysqli_fetch_all($sql,MYSQLI_ASSOC);
?>