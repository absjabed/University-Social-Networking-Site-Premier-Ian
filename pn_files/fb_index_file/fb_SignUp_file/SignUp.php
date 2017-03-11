<?php
if(isset($_POST['register']))
{
	mysql_connect("localhost","root","");
	mysql_select_db("faceback");
	
	$Email=$_POST['email'];
	$usrname = $_POST['gusername'].''.$_POST['batch'].$_POST['department'];
	$que1=mysql_query("select * from users where Email='$Email'");
	$count1=mysql_num_rows($que1);

	if($count1>0)
	{
		echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
	}
	else
	{
		$UnivID = $_POST['uniID'];
		$DeptName = $_POST['department'];
		$BatchNo = $_POST['batch'];
		$Name=$_POST['first_name'].' '.$_POST['last_name'];
		$Password=$_POST['password'];
		$Gender=$_POST['sex'];
		$Birthday_Date=$_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
		$FB_Join_Date=$_POST['fb_join_time'];
		
		$day=intval($_POST['day']);
		$month=intval($_POST['month']);
		$year=intval($_POST['year']);
		if(checkdate($month,$day,$year))
		{
			$que2=mysql_query("insert into users(Name,dept_name,Uni_ID,batch,user_name,Email,Password,Gender,Birthday_Date,FB_Join_Date) values('$Name','$DeptName','$UnivID','$BatchNo','$usrname','$Email','$Password','$Gender','$Birthday_Date','$FB_Join_Date')");

			session_start();
			$_SESSION['tempfbuser']=$usrname;
		
			if($Gender=="Male")
			{
				header("location:fb_files/fb_step/fb_step1/Step1_Male.php");
			}
			else
			{
				header("location:fb_files/fb_step/fb_step1/Step1_Female.php");
			}
		}
		else
		{
			echo "<script>
				alert('The selected date is not valid.');
			</script>";
		}
	}
}
?>
