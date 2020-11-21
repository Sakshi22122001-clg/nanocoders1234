<?php
include_once("connection.php");
$uid=$_POST["txtUid"];
$name=$_POST["name"];
$mobile=$_POST["txtMob"];
$email=$_POST["email"];
$ngo=$_POST["ngo"];
$address=$_POST["txtAdd"];
$city=$_POST["city"];
$state=$_POST["state"];


$orgName=$_FILES["profilePic"]["name"];
$tmpName=$_FILES["profilePic"]["tmp_name"];

$query="insert into profiles values('$uid','$name','$mobile','$email','$ngo','$address','$city','$state','$orgName')";
mysqli_query($dbCon,$query);
$msg=mysqli_error($dbCon);
if($msg=="")
{
	move_uploaded_file($tmpName,"uploads/".$orgName);
	echo "<h2>Record Saved</h2>
    <br>
    Click <a href='dash-people.php'>here</a> to redirect to dashboard";

}
else
	echo $msg;


?>