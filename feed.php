<?php
include("config.php");
$name=$_POST['nm1'];
$em=$_POST['email'];
$subject=$_POST['sub1'];
$message=$_POST['msg1'];

$str="";

if($name==""||$em==""||$subject==""||$message=="")
{
	$str="Fill all the information required..";
	echo $str;
}
else
{
$sql="insert into feedback(name,email,subject,message) values('$name','$em','$subject','$message')";


if(mysqli_query($con,$sql))
{
	$str="Feedback sent...";
	echo $str;
}
else
{
	$str="cannot send..";
	echo $str; 
}
}
?>