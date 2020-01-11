<html>
<head>
<style>
#outer
{
height:1200px;
width:800px;
//border:1px solid white;
margin:0px auto;	
}
#menu
{
height:50px;
width:800px;
background-color:white;
border:1px solid white;
border-radius:20px 20px 0px 0px;	
}
#menu ul
{
list-style-type:none;	
}
#menu li
{
display:inline;
//border:1px solid;	
padding:10px;
}
#menu ul li a
{
color:black;
text-decoration:none;	
}
#menu ul li a:hover
{
color:green;	
}	
#slider
{height:250px;
 width:800px;
 margin-top:5px;
 //border:1px solid white;
	
}
#lside
{
height:600px;
width:600px;
float:left;
background-color:white;
border-radius:0px 0px 0px 20px;	
}
#rside
{
height:600px;
width:200px;
background-color:lightgrey;	
float:right;
border-radius:0px 0px 20px 0px;
	
}
#parent
{
height:600px;
width:800px;
margin-top:5px;
//background-color:red;	
}
#footer
{
height:270px;
width:800px;
background-color:white;
border-radius:20px;
margin-top:20px;	
	
}
</style>
<title>PHP project</title>
</head>
<body bgcolor="green">
  <div id="outer">
   <div id="menu">
    <ul>
	 <li><a href="index.php">HOME</a></li>
	 <li><a href="register.php">REGISTER</a></li>
	 <li><a href="login.php">LOGIN</a></li>
	 <li><a href="show.php">SHOW</a></li>
	 <li><a href="calculator.php">CALCULATOR</a></li>
	 </ul>
   </div>
   <div id="slider">
      <img src="sofa.png" height="250px" width="800px"/>
   </div>
   <div id="parent">
     <div id="lside">
     </div>
     <div id="rside">
     </div>
   </div>
   <div id="footer">
   </div>
   </div>
</body>
</html>









