<?php
	include_once("connection.php");
session_start();
    if(isset($_SESSION["activeuser"])==false)
    {
        header("location:index.php");
    }
$uid=$_SESSION["activeuser"];
$que="select * from ngos where uid='$uid'";
$tab=mysqli_query($dbCon,$que);
$row=mysqli_fetch_array($tab);
$ngo=$row["name"];

$query="select * from donations where ngo='$ngo'";
$table=mysqli_query($dbCon,$query);

$ary=array();

while($row=mysqli_fetch_array($table))
{
	
	$ary[]=$row;
}
echo json_encode($ary);
?>
