<?php
require 'php/config.php';
session_start();
$id= $_GET['id'];
$sql=mysqli_query($conn,"DELETE FROM result WHERE id='{$id}'");
if($sql)
{
    header('Location: results.php');
}

?>