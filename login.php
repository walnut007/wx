<?php
	$userName=$_POST['userName'];
	$userNum=$_POST['userNum'];	
	print_r($sql_check);
		if($userNum==null||$userName==null)
		{
			echo "<script>alert('姓名和学号不能为空');location='index.php';</script>";
		}
		else
		{
			require './common/conn.php';
			$sql_check="select * from user where userName='".$userName."' and userNum='".$userNum."'";
			$res=mysql_query($sql_check);
				if(mysql_num_rows($res)<=0)
				{
					echo "<script>alert('用户名或密码错误！');location='index.php';</script>";
					mysql_close();
				}
				else{
					session_start();
					$_SESSION['userNum']=$userNum;
					$_SESSION['userName']=$userName;
					//$_SESSION['major']=mysql_fetch_row($res)[1];
					//var_dump($_SESSION['major']);
					echo "<script>location='repaire.php';</script>";
					mysql_close();
				}
		}
?>

 
