<?php
include("config.php");
$x=$_GET['id'];
$s="select * from our_course where Cid='$x'";
$r=mysqli_query($con,$s);
while($res=mysqli_fetch_array($r))
{
	echo "$res[2]";
}
?>