<?php
session_start();
include_once("connection.php");

$uid=$_GET["uid"];
$pwd=$_GET["pwd"];

$query="select * from users where uid='$uid'";

$table=mysqli_query($dbCon,$query);
$count=mysqli_num_rows($table);
if($count==1)
{
$row=mysqli_fetch_array($table);
       if($pwd==$row["pwd"])
    {
        $category=$row["category"];
        $_SESSION["activeuser"]=$uid;
        echo $category;
    }
    else
    {
        echo "Incorrect Password";
    } 	
}
else
{
  echo "User Id does not Exist";
}
?>
