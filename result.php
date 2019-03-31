<?php 
require_once ('config.php'); 
?>
<!DOCTYPE html>
<html >
<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"> 
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"> 
		<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<title>报名信息汇总页面</title>

</head>

<body>

<div id="container"align="center">
<div id="header" >
<h2>报名结果汇总</h2>
<a href="index.php">返回首页</a> 
<a href="modify.php">修改报名信息</a> 
<a href="javascript:void(0);" onclick="window.opener=null; window.open('','_self');window.close();">关闭窗口</a> 
</div>

<div id="page" align="center">
<?php
$result=mysql_query("select * from member order by user_name asc"); 
while($rs=mysql_fetch_array($result)){
?>
<div align="center">
<table class="table" border="1">
<thead></thead>
<tbody>
  <tr>
    <td align="right">参赛队名:</td>
    <td align="left"><? echo $rs['team_name']; ?></td> 
  </tr>
  <tr>
        <td align="right">选题:</td>
		<td align="left"><? echo $rs['topic']; ?></td>
  </tr>
  <tr>
	<td align="right" >成员:</td>
    <td align="left"><? echo $rs['member1_name']; ?>&nbsp;<? echo $rs['member2_name']; ?>&nbsp;<? echo $rs['member3_name']; ?>&nbsp;<? echo $rs['member4_name']; ?>&nbsp;<? echo $rs['member5_name']; ?></td>
   </tr>
  <tr>
    <td align="right">指导教师:</td>
    <td align="left"><? echo $rs['teacher1_name']; ?>&nbsp;<? echo $rs['teacher2_name']; ?></td>
  </tr>
    <tr>
		<td align="right" >备注：</td>
		<td align="left"><? echo $rs['member_memo']; ?></td>	
  </tr>
  </tbody>  
</table>
</div>
</div>
<hr style="height:5px;border:none;border-top:5px groove skyblue;" />
<?php
}
?>
<div id="footer" align="center">
  <p><span style="font-family:arial;">Copyright &copy;2019 浙江农林大学省服务外包</span></p>
  <p>联系我们: <a href="mailto:hetao758@126.com">hetao758@126.com</a>.</p>
</div>
</div>
</body>
</html>