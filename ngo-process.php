<?php
include_once("connection.php");
$btn=$_POST["btn"];
if($btn=="Save")
	doSignup($dbCon);
else
	doUpdate($dbCon);
function doSignup($dbCon)
{
    $uid=$_POST["txtUid"];
$name=$_POST["name"];
$mobile=$_POST["txtMob"];
$email=$_POST["email"];
$ngo=$_POST["ngo"];
$bio=$_POST["bio"];


$orgName=$_FILES["profilePic"]["name"];
$tmpName=$_FILES["profilePic"]["tmp_name"];

$query="insert into ngos values('$uid','$name','$mobile','$email','$ngo','$bio','$orgName')";
mysqli_query($dbCon,$query);
$msg=mysqli_error($dbCon);
if($msg=="")
{
	move_uploaded_file($tmpName,"uploads/".$orgName);
	echo "<h2>Record Saved</h2>
    <br>
    Click <a href='dash-ngo.php'>here</a> to redirect to dashboard";
}
else
	echo $msg;
}
function doUpdate($dbCon)
{
        $uid=$_POST["txtUid"];

    $name=$_POST["name"];
$mobile=$_POST["txtMob"];
$email=$_POST["email"];
$ngo=$_POST["ngo"];
$bio=$_POST["bio"];
$hdn=$_POST["hdn"];

$orgName=$_FILES["profilePic"]["name"];
$tmpName=$_FILES["profilePic"]["tmp_name"];

    if($orgName=="")
	{
		$fileName=$hdn;
	}
	else
	{
		$fileName=$orgName;
		move_uploaded_file($tmpName,"uploads/".$orgName);
	}
    $query="update ngos set name='$name',mobile='$mobile',email='$email',ngotype='$ngo',bio='$bio',pic='$fileName' where uid='$uid'";
mysqli_query($dbCon,$query);
$msg=mysqli_error($dbCon);
if($msg=="")
{
	
	echo "<h2>Record Updated successfully...</h2>
    <br>
    Click <a href='dash-ngo.php'>here</a> to redirect to dashboard";
}
else
	echo $msg;

}
?>