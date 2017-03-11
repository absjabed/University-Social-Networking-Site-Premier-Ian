<?php
	include("Login.php");
?>
<html>
<head>
<title> Premier-ian </title>
<LINK REL="SHORTCUT ICON" HREF="fb_files/fb_title_icon/premierian.ico" />
	<style>
		#login_button
		{
			font-size:12px;
			height:28;
			width:55;
			padding:2;
			background-color:LightSkyBlue; color:#FFFFFF;
			font-weight:bold;
		}
	</style>
     <link href="fb_files/fb_font/font.css" rel="stylesheet" type="text/css">
</head>
<body>

<div style="position:absolute;left:0;top:0; height:13%; width:100%; z-index:-1; background:yellowGreen">   </div>
<div style="position:absolute;left:13.5%; top:3.3%; font-size:45; font-weight:900; color:#FFFFFF; font-weight:bold;"> <font face="myFbFont">  Premier-ian </font> </div>

<div style="position:absolute;left:26%; top:25%; height:1; width:46.85%; background-color:#CCCCCC; "> </div>
<div style="position:absolute;left:26%; top:25%; height:60%; width:0.10%; background-color:#CCCCCC; "> </div>
<div style="position:absolute;left:26%; top:84.9%; height:1; width:46.85%; background-color:#CCCCCC; "> </div>
<div style="position:absolute;left:72.75%; top:25%; height:60%; width:0.10%; background-color:#CCCCCC; "> </div>

<div style="position:absolute;left:27.4%; top:32.8%; height:1; width:44.05%; background-color:#CCCCCC; "> </div>

<div style="position:absolute;left:27.4%;top:36.2%; height:15%; width:44.05%; z-index:-1; background:PowderBlue; ">   </div>


	
	<div style="position:absolute; left:28%; top:37.2%;"> <font size="5" color="red"> Incorrect UserID!!! </font>  </div>
	<div style="position:absolute; left:28%; top:42.2%; font-size:14;">  The userID you entered does not belong to any account.  </div>
	<div style="position:absolute; left:28%; top:46.2%; font-size:14;">  You can login using userID associated with your account. Make sure that it is typed correctly.  </div>
	
<form  method="post">
	<div style="position:absolute; left:35.5%; top:55.2%; font-size:15; color:#333333;"> UserID </div>
	<div style="position:absolute; left:43.5%; top:55%; font-size:11px; "> <input type="text" placeholder="Enter userID" name="username" style="width:174;"/> </div>
	<div style="position:absolute; left:35.5%; top:62.2%; font-size:15; color:#333333;"> Password: </div>
	<div style="position:absolute;left:43.5%; top:62%; font-size:11px; "> <input type="password" placeholder="Enter Password" name="password" style="width:174;"> </div>
	
	<div style="position:absolute;left:43.5%;top:68.7%; ">  <input type="submit" name="Login" value="Log In" id="login_button" />  </div>

	<div style="position:absolute;left:49%;top:68.7%; "> <a href="register.php" style="color:#3B5998;text-decoration:none;"> OR - Register as a <b>Premier-ian</b> </a> </div>
	<div style="position:absolute;left:49%; top:73.2%; font-size:15.5px;"> <a href='Forgot_Password.php' style="text-decoration:none; color:red;" > Forgot your password? </a> </div>

</body>
</html>

