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
<title>������Ϣ����ҳ��</title>

</head>

<body>

<div id="container"align="center">
<div id="header" >
<h2>�����������</h2>
<a href="index.php">������ҳ</a> 
<a href="modify.php">�޸ı�����Ϣ</a> 
<a href="javascript:void(0);" onclick="window.opener=null; window.open('','_self');window.close();">�رմ���</a> 
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
    <td align="right">��������:</td>
    <td align="left"><? echo $rs['team_name']; ?></td> 
  </tr>
  <tr>
        <td align="right">ѡ��:</td>
		<td align="left"><? echo $rs['topic']; ?></td>
  </tr>
  <tr>
	<td align="right" >��Ա:</td>
    <td align="left"><? echo $rs['member1_name']; ?>&nbsp;<? echo $rs['member2_name']; ?>&nbsp;<? echo $rs['member3_name']; ?>&nbsp;<? echo $rs['member4_name']; ?>&nbsp;<? echo $rs['member5_name']; ?></td>
   </tr>
  <tr>
    <td align="right">ָ����ʦ:</td>
    <td align="left"><? echo $rs['teacher1_name']; ?>&nbsp;<? echo $rs['teacher2_name']; ?></td>
  </tr>
    <tr>
		<td align="right" >��ע��</td>
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
  <p><span style="font-family:arial;">Copyright &copy;2019 �㽭ũ�ִ�ѧʡ�������</span></p>
  <p>��ϵ����: <a href="mailto:hetao758@126.com">hetao758@126.com</a>.</p>
</div>
</div>
</body>
</html>