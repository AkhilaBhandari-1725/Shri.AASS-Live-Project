<?php
include("config.php");

$name=$_POST['nm1'];
$saddress=$_POST['add1'];
$scontact=$_POST['cnt1'];
$scollege=$_POST['clg1'];
$sbranch=$_POST['brch1'];
$suname=$_POST['unm1'];
$spassword=$_POST['paswrd1'];
$semail=$_POST['email'];
$str="";


if($name==""||$saddress==""||$scontact==""||$scollege==""||$sbranch==""||$suname==""||$spassword==""||$semail=="")
{
	echo "<script>alert('Enter all the information required...')</script>";
}
else if($name!=""||$saddress!=""||$scontact!=""||$scollege!=""||$sbranch!=""||$suname!=""||$spassword!=""||$semail!="")
{
	$sql="insert into Stud_reg(Full_name,Address,Contact_no,College_name,Branch,User_name,Password,Email_id) values('$name','$saddress','$scontact','$scollege','$sbranch','$suname','$spassword','$semail')";
	if(mysqli_query($con,$sql))
	{
		echo "alert('Registered successfully...')";
		
	}
	else
	{
		$str=mysqli_error($con);
		echo "alert('$str')";
		
	}
}
?>