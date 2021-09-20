<?php
session_start();
include_once "config.php";
$SemCount =  count($_POST["sem"]);
$nameCount=  count($_POST["name"]);
$marksCount= count($_POST["marks"]);
if($SemCount > 1 && $nameCount > 1 && $marksCount >1)
{
	for($i=0; $i<$SemCount; $i++)
	{
			$sql = "INSERT INTO result(unique_id,sem,subject,marks) VALUES('".$_SESSION['unique_id']."','".$_POST['sem'][$i]."','".$_POST['name'][$i]."','".$_POST['marks'][$i]."')";
			mysqli_query($conn, $sql);
	}
	echo "Data Inserted";
}
else
{
	echo "Please Enter Name";
}
?>