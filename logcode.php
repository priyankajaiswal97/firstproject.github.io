<?php
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
mysql_connect("localhost","root","");
mysql_select_db("bbdniit");
$query="select * from register where email='$email' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
header("location:profile.php");	
}
else
{
header("location:login.php");	
}	
?>