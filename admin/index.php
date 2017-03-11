<?php
if(isset($_POST['Login']))
{
	mysql_connect("localhost","root","");
	mysql_select_db("faceback");
	
	$u=$_POST['username'];
	$p=$_POST['password'];
	
	//$user=md5($u);
	//$pass=md5($p);
	
	$que_admin_check=mysql_query("select * from admin_info where Username='$u' and Password='$p'");
	
	$count1=mysql_num_rows($que_admin_check);
	
	if($count1>0)
	{
		session_start();
		$_SESSION['fbadmin']=$u;
		header("location:fb_home/Home.php");
	}
	else
	{
		header("location:../index.php");
	}
}
?>
<html>
<head>
<title> Premierian Admin </title>
<link href="fb_font/font.css" rel="stylesheet" type="text/css">
<LINK REL="SHORTCUT ICON" HREF="img/premierian.ico" />
<style>
#login_button
{
	font-size:15px;
	height:35;
	width:100;
	padding:2;
	background-color:DodgerBlue; 
	color:#FFFFFF;
	font-weight:bold;
	box-shadow:0px 0px 5px 2px rgb(0,0,0);
}
#go_to_pb
{
	font-size:15px;
	height:35;
	width:200;
	padding:2;
	background-color:#CCC; 
	color:#000;
	font-weight:bold;
	box-shadow:0px 0px 5px 2px rgb(0,0,0);
}
</style>
</head>
<body>

<!--head background-->
	<div style="position:absolute;left:0%;top:0%; height:13.2%; width:100%; z-index:-1; background:yellowGreen">   </div>
	<div style="position:absolute;left:10%; top:3.3%; font-size:45; font-weight:900; color:#FFFFFF; font-weight:bold;"> <font face="myFbFont">  Premier-ian </font> </div>
	<!--text: faceback -->
	<div style="position:absolute;left:36%; top:3.3%; font-size:45; font-weight:900; color:blue; font-weight:bold; box-shadow:0px -10px 20px 1px rgb(0,0,0);"> <font face="myFbFont">Admin Access Panel</font> </div>
	<!--body background-->
	<div style="position:absolute;left:0%;top:13.2%; height:90%; width:100%; z-index:-1; background:BlanchedAlmond">   </div>
	<!--bottam background-->
	<div style="position:absolute;left:0%;top:110%; height:5%; width:100%; z-index:-1; background:#FFFFFF">   </div>
    
    <div style="position:absolute; left:10%; top:18%;"> <img src="img/pb1.png" width="500" height="500"> </div> 
    
    <div style="position:absolute;left:60%;top:26%; height:60%; width:30%; background:#FFF; box-shadow:0px 0px 10px 3px rgb(21,57,147);">   </div>
    
    <div style="position:absolute;left:70.5%; top:28%; font-size:45; font-weight:900; color:#3B5998; font-weight:bold;">  Login </div>
    
     <div style="position:absolute;left:60%;top:39%; height:2%; width:30%; background:DodgerBlue; box-shadow:0px 0px 10px 3px rgb(21,57,147);">   </div>
     
     <form  method="post">
     <div style="position:absolute;left:62%; top:45%; font-size:25; font-weight:900; color:#3B5998; font-weight:bold;">  UserID </div>
     <div style="position:absolute; left:62%; top:50%;  "> <input type="text" placeholder="Enter UserID" name="username" style="width:350; height:40; font-size:20px;"/> </div>
     <div style="position:absolute;left:62%; top:58%; font-size:25; font-weight:900; color:#3B5998; font-weight:bold;">  Password </div>
     <div style="position:absolute;left:62%; top:63%; font-size:13px; "> <input type="password" placeholder="Enter Password" name="password" style="width:350; height:40; font-size:20px;"> </div>
     <div style="position:absolute;left:80.5%;top:75%; ">  <input type="submit" name="Login" value="Log In" id="login_button" />  </div>
    </form>
    
    <form action="../index.php">
    	<div style="position:absolute;left:62%;top:75%; "> <input type="submit" value="Go to Site Page" id="go_to_pb"> </div>
    </form>
    

</body>
</html>