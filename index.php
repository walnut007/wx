<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" Content="text/html";charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>登录</title>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		
	</head>
	<body>
	<div align="center">
		<form action="login.php" method="post" data-ajax="false">
			<div id="main" class="main" align="center">
				<h2>在线报修系统--登录hello world！</h2>
				<table align="center" >
					<tr>
					<th align="right">姓名：</th><th><input type="text" name="userName" /></th>
					</tr>
					<tr>
					<th align="right">学号（工号）：</th><th><input type="text" name="userNum" /></th>
					</tr>
					<tr>
					<th colspan="2"><input type="submit" name="submit" value="登录" /></th>
					</tr>
					</table>
			</div>
		</form>	
		</div>
		<div data-role="footer" data-position=”fixed">
				<p align="center"><span style="font-family:arial;">Copyright &copy;2019 浙江农林大学</span></p>
			</div>		
	</body>
</html>
