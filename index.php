<?php
	include("Login.php");
?>
<html>
<head>
	<title> Premierian </title>
<?php	
include("fb_files/fb_index_file/fb_background_file/index_background.php");
?>
	<LINK REL="SHORTCUT ICON" HREF="fb_files/fb_title_icon/premierian.ico" />
	<link href="fb_files/fb_index_file/fb_css_file/index_css.css" rel="stylesheet" type="text/css">
    <link href="fb_files/fb_font/font.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="fb_files/fb_index_file/fb_js_file/Registration_validation.js"> </script>
</head>
<script>
	function time_get()
	{
		d = new Date();
		mon = d.getMonth()+1;
		time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
		Reg.fb_join_time.value=time;
	}
</script>
<body>
	<!--login form-->
	<form  method="post">
	<div id="loginInfo">
		<div style="position:absolute;left:15%; top:50%; font-size:14px; color:black;">  UserID </div> 
		<div style="position:absolute;left:20%;   top:50%; "> <input id ="userbx" placeholder="Enter your UserID" type="text" name="username" style="width:149.5;"/> </div>
		
		<div style="position:absolute;left:15%; top:55%; font-size:14px; color:black;"> Password </div>
		<div style="position:absolute;left:20%;  top:55%; "> <input id ="passbx" placeholder="Enter Password" type="password" name="password" style="width:149.5;"> </div>
		<div style="position:absolute;left:21%; top:63%; font-size:15.5px; color:#CCCCCC;"> <a href="Forgot_Password.php" style="color:red; text-decoration:none;"> Forgot your password? </a> </div>
		<div style="position:absolute;left:15%; top:60%; ">   <input type="submit" name="Login" value="Log In" id="login_button" />  </div>
		<div style="position:absolute;left:21%; top:60%; opacity: 1; color:purple;"><a href="register.php" style="text-decoration:none" title="">OR - Register as a new user.</a></div>
	</div>
	</form>
	
	
    <div style="position:absolute; left:40%; top:24%; color:#20B2AA; font-size:35px;"> <font face="myFbFont"> Premierian helps you to connect with all the </font> </div>
    <div style="position:absolute; left:50%; top:30%; color:#20B2AA; font-size:35px;"> <font face="myFbFont"> students of our university in one place. </font></div>
	
	
        
 <!--my_details -->  
    <div style="display:none;" id="my_detailsjb">
    <div style="position:absolute;left:15%;top:73%; height:30%; width:30%; z-index:2; background:#000; opacity:0.5; box-shadow:10px 0px 10px 1px rgb(0,0,0);">   </div>
    <div style="position:absolute;left:13%;top:75%; z-index:3;"> <img src="fb_files/fb_index_file/fb_background_file/Developer_details/my.jpg" height="165" width="150" style="box-shadow:0px 0px 10px 5px rgb(0,0,0);"> </div>
    <div style="position:absolute;left:26%;top:75%; z-index:3; color:#FFF;"> <h2> <?php echo base64_decode("TW9oYW1tYWQgQWJzIEphYmVk"); ?> </h2> </div>
    <div style="position:absolute;left:26%;top:83%; z-index:3; color:#FFF;">  <h3><?php echo base64_decode("YWJzajRrQGdtYWlsLmNvbQ=="); ?> </h3> </div>
    <div style="position:absolute;left:26%;top:90%; z-index:3; color:#FFF;"> <h3> <?php echo base64_decode("ZmIuY29tL2Fic2o0aw=="); ?>  </h3> </div>
	</div>
	<!--Rahul -->
	<div style="display:none;" id="my_detailsR">
    <div style="position:absolute;left:20%;top:73%; height:30%; width:30%; z-index:2; background:#000; opacity:0.5; box-shadow:10px 0px 10px 1px rgb(0,0,0);">   </div>
    <div style="position:absolute;left:18%;top:75%; z-index:3;"> <img src="fb_files/fb_index_file/fb_background_file/Developer_details/rahul.JPG" height="165" width="150" style="box-shadow:0px 0px 10px 5px rgb(0,0,0);"> </div>
    <div style="position:absolute;left:31%;top:75%; z-index:3; color:#FFF;"> <h2> <?php echo "Rahul Das"; ?> </h2> </div>
    <div style="position:absolute;left:31%;top:83%; z-index:3; color:#FFF;">  <h3><?php echo "5th Semester, CSE"; ?> </h3> </div>
    <div style="position:absolute;left:31%;top:90%; z-index:3; color:#FFF;"> <h3> <?php echo "xyz......"; ?>  </h3> </div>
	</div>
	<!--Joy -->
	<div style="display:none;" id="my_detailsJ">
    <div style="position:absolute;left:25%;top:73%; height:30%; width:30%; z-index:2; background:#000; opacity:0.5; box-shadow:10px 0px 10px 1px rgb(0,0,0);">   </div>
    <div style="position:absolute;left:23%;top:75%; z-index:3;"> <img src="fb_files/fb_index_file/fb_background_file/Developer_details/joy.jpg" height="165" width="150" style="box-shadow:0px 0px 10px 5px rgb(0,0,0);"> </div>
    <div style="position:absolute;left:36%;top:75%; z-index:3; color:#FFF;"> <h2> <?php echo "Joy Chowdhury"; ?> </h2> </div>
    <div style="position:absolute;left:36%;top:83%; z-index:3; color:#FFF;">  <h3><?php echo "fb.com/joy488"; ?> </h3> </div>
    <div style="position:absolute;left:36%;top:90%; z-index:3; color:#FFF;"> <h3> <?php echo "xyz...."; ?>  </h3> </div>
	</div>
	<!--Shaharia -->
	<div style="display:none;" id="my_detailsS">
    <div style="position:absolute;left:30%;top:73%; height:30%; width:30%; z-index:2; background:#000; opacity:0.5; box-shadow:10px 0px 10px 1px rgb(0,0,0);">   </div>
    <div style="position:absolute;left:28%;top:75%; z-index:3;"> <img src="fb_files/fb_index_file/fb_background_file/Developer_details/sunny.jpg" height="165" width="150" style="box-shadow:0px 0px 10px 5px rgb(0,0,0);"> </div>
    <div style="position:absolute;left:41%;top:75%; z-index:3; color:#FFF;"> <h2> <?php echo"Shaharia Khanam"; ?> </h2> </div>
    <div style="position:absolute;left:41%;top:83%; z-index:3; color:#FFF;">  <h3><?php echo "fb.com/shahria.khanam"; ?> </h3> </div>
    <div style="position:absolute;left:41%;top:90%; z-index:3; color:#FFF;"> <h3> <?php echo "xyz....."; ?>  </h3> </div>
	</div>
    
		
<?php
	include("fb_files/fb_index_file/fb_erorr_file/fb_erorr.php");
?>					
</body>
</html>