<?php
session_start();
var_dump ($_SESSION["userName"]);
var_dump ($_SESSION["userNum"]);
$proTime=date('Y-m-d H:i:s', time());
//$sql="insert into repair(sbNum,sbProblem,proTime) values('".$_SESSION["userNum"]."','".$_POST['text1']."','".$proTime."')";
//echo $sql;

if($_POST["submit"]){
		require './common/conn.php';
	    $sql="insert into repair(sbNum,sbProblem,repNum,proTime) values('".$_SESSION["userNum"]."','".$_POST['text1']."','".$_SESSION["userNum"]."','".$proTime."')";
		$result=mysql_query($sql)or die(mysql_error());
		if($result){
					echo "<script>alert('设备故障提交成功,请等待工作人员维修！');location='result.php';</script>";
					mysql_close();
					}
		else{
			echo "<script>alert('提交失败,请重新报修');location='repaire.php';</script>";
			mysql_close();
			}
		}		
?>