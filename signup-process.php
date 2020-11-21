<?php
include_once("connection.php");
$uid=$_GET["uid"];
$pwd=$_GET["pwd"];
$mobile=$_GET["mobile"];
$category=$_GET["category"];

$query="insert into users values('$uid','$pwd','$mobile','$category')";

mysqli_query($dbCon,$query);
$msg=mysqli_error($dbCon);
if($msg=="")
{
	
	echo "Signup Successful";
}
else
	echo $msg;

?>