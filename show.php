<?php
mysql_connect("localhost","root","");
mysql_select_db("bbdniit");

$query="select * from register";
$res=mysql_query($query);

?>
<table border="1" align="centre">
<tr>
<th>ID</th>
<th>Name</th>
<th>Fname</th>
<th>Gender</th>
<th>Email</th>
<th>Password</th>
</tr>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $row['id'];?></td> 
<td><?php echo $row['name'];?></td> 
<td><?php echo $row['fname'];?></td> 
<td><?php echo $row['gender'];?></td> 
<td><?php echo $row['email'];?></td> 
<td><?php echo $row['password'];?></td> 
</tr>
<?php
}
?>
</table>