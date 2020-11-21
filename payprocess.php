<?php
include_once("connection.php");
 session_start();
    if(isset($_SESSION["activeuser"])==false)
    {
        header("location:index.php");
    }

$uid=$_SESSION["activeuser"];
$credit=$_GET["creditno"];
$expire=$_GET["expire"];
$cvv=$_GET["cvv"];
$name=$_GET["name"];
$amount=$_GET["amount"];
$ngo=$_GET["ngo"];
$query="insert into donations values('$uid','$credit','$amount','$name','$ngo',CURDATE())";
mysqli_query($dbCon,$query);
$msg=mysqli_error($dbCon);
if($msg=="")
    echo "Successful";
else
    echo $msg;
?>