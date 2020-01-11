<?php
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$gender=$_POST['a'];
//echo $gender;
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
mysql_connect("localhost","root","");
mysql_select_db("bbdniit");
$query="insert into register(name,fname,gender,email,password) values ('$name','$fname','$gender','$email','$password')";
mysql_query("$query");
header("Location:login.php");

?>