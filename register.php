<?php

	include("fb_files/fb_index_file/fb_SignUp_file/SignUp.php");

?>
<html>

<head>
		<title>Register</title>
		<LINK REL="SHORTCUT ICON" HREF="fb_files/fb_title_icon/premierian.ico" />
		<script type="text/javascript" src="fb_files/fb_index_file/fb_js_file/Registration_validation.js"> </script>
		<style>
		#sign_button{
			background:#69A74E;
			color:#FFFFFF;
			border-top-color:#3B6E22;
			border-right-color:#2C5115;
			border-left-color:#3B6E22;
			font-size:15px;
			height:30;
			width:75;
			font-weight:bold;
			box-shadow:-5px 0px 10px 1px rgb(0,0,0);
		}
	</style>
 <link href="fb_files/fb_font/font.css" rel="stylesheet" type="text/css">
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


 
 <div style="position:absolute;left:0%;top:0%; height:13.2%; width:100%; z-index:-1; background:yellowGreen">   </div>
<div style="position:absolute;left:13.5%; top:3.3%; font-size:45; font-weight:900; color:#FFFFFF; font-weight:bold;"> <font face="myFbFont">  Premier-ian </font> </div>
 
	<!-- Registration -->
	<form  method="post" onSubmit="return check();" name="Reg">
		<div style="position: absolute; left: 569px; top: 154px; height: 1; width: 385; background-color: #CCCCCC;"> </div>		
		<div style="position: absolute; left: 592px; top:12%%; color: yellowGreen; font-size: 22px; top: 100px; width: 218px; height: 21px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;"> <h5><b> Register as a <u>Premierian</u> </b></h5> </div>
		<div style="position: absolute; left: 570px; top: 186px; height: 1; width: 385; background-color: #CCCCCC;"> </div>

      <div style="position: absolute; left: 565px; top: 205px; font-size: 14px; color: #000000; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">  University ID Number:  </div>
	  <div style="position: absolute; left: 719px; top: 204px;"> <input type="text" name="uniID" placeholder="Enter University ID Number"  size="25" class="inputbox" /> </div>
		
		<div style="position: absolute; left: 567px; top: 250px; font-size: 15px; color: #000000; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;"> Department Name:  </div>
		<div style="position: absolute; left: 718px; top: 249px; height: 26px; width: 147px;">		  
		<select name="department" style="width: 169px; height: 35; font-size: 15px; padding: 3; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">
			<option value="Select:"> Select department: </option>
			<option value="CSE"> CSE </option>
			<option value="EEE"> EEE </option>
			<option value="Arch"> Architecture </option>
		</select>
		</div>
		
		<div style="position: absolute; left: 570px; top: 292px; font-size: 16px; color: #000000; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">  Batch No:  </div>
		<div style="position: absolute; left: 718px; top: 291px;"> <input type="text" name="batch" placeholder="Enter your batch No"  size="25" class="inputbox" /> </div>
		
		<div style="position: absolute; left: 569px; top: 328px; font-size: 16px; color: #000000; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">  First Name: </div>
		<div style="position: absolute; left: 717px; top: 327px; width: 143px;"> <input type="text" name="first_name" placeholder="First Name" class="inputbox" maxlength="10"/> </div>
		
		<div style="position: absolute; left: 569px; top: 374px; font-size: 16px; color: #000000; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">  Last Name: </div>
		<div style="position: absolute; left: 717px; top: 373px;"> <input type="text" name="last_name" placeholder="Last Name"  size="25" class="inputbox" maxlength="10" /> </div>
		
		<div style="position: absolute; left: 570px; top: 412px; font-size: 16px; color: #000000; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">  Your Email:  </div>
		<div style="position: absolute; left: 715px; top: 411px;"> <input type="text" name="email" placeholder="Enter your Email"  size="25" class="inputbox" /> </div>
		
		
		<div style="position: absolute; left: 569px; top: 453px; font-size: 16px; color: #000000; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">  Get an Username:  </div>
		<div style="position: absolute; left: 714px; top: 452px;"> <input type="text" name="gusername" placeholder="Your desired username"  size="25" class="inputbox" /> </div>
		
	  <div style="position: absolute; left: 572px; top: 498px; font-size: 16px; color: #000000; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;"> New Password:  </div>
	  <div style="position: absolute; left: 714px; top: 497px; width: 150px;"> <input type="password" name="password" placeholder="Give a Password" size="25" class="inputbox" /> </div>
	  

		<div style="position: absolute; left: 583px; top: 544px; font-size: 16px; color: #000000; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;"> I am:  </div>
		<div style="position: absolute; left: 713px; top: 536px; width: 138px; height: 28px; margin-top: 5px; margin-right: 5px; margin-bottom: 5px; margin-left: 5px;">		  
		<select name="sex" style="width: 139px; height: 35; font-size: 15px; padding: 3; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">
			<option value="Select Sex:"> Select Gender: </option>
			<option value="Female"> Female </option>
			<option value="Male"> Male </option>
		</select>
		</div>
		
    <div style="position: absolute; left: 576px; top: 593px; font-size: 16px; color: #000000; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">  Birthday:  </div>
	<div style="position: absolute; left: 666px; top: 587px;">
	<select name="month" style="width: 80; font-size: 15px; height: 32; padding: 3;">
	<option value="Month:"> Month: </option>
	
	<script type="text/javascript">
	
		var m=new Array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		for(i=1;i<=m.length-1;i++)
		{
			document.write("<option value='"+i+"'>" + m[i] + "</option>");
		}	
	</script>
	
	</select>
	</div>

	<div style="position: absolute; left: 756px; top: 588px;">
	<select name="day" style="width: 63; font-size: 15px; height: 32; padding: 3;">
		  <option value="Day:"> Day: </option>
		  <script type="text/javascript">
	
		for(i=1;i<=31;i++)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
		
	      </script>
	    </select>
	</div>	

	<div style='position: absolute; left: 831px; top: 587px;'>
	<select name="year" style="width: 70; font-size: 15px; height: 32; padding: 3;">
	<option value="Year:"> Year: </option>
	
	<script type="text/javascript">
	
		for(i=1996;i>=1960;i--)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
	
	</script>
	
	</select>
	</div>		
		<input type="hidden" name="fb_join_time">
		<div style="position: absolute; left: 610px; top: 640px;">  <input type="submit" name="register" value="Register" id="sign_button" / onClick="time_get()"> </div>
		</form>
		
		<div style="position: absolute; left: 571px; top: 625px; height: 1; width: 385; background-color: #CCCCCC;"> </div>
		
<?php
	include("fb_files/fb_index_file/fb_erorr_file/fb_erorr.php");
?>
		
		</body>
</html>
