<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head> 	
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <title>设备报修主界面</title>
        
    <body>
	<div class="container" align="center">
		<h3><?php echo $_SESSION["userName"];echo $_SESSION["userNum"];?></h3> 
		<!--h2 class="title">设备报修主界面</h2-->
        <form class="" action="insert.php" method="post" enctype="multipart/form-data" data-ajax="false">
			<div class="container" align="center">			
				<div id="Inputs">
                  详细故障描述：<input type="text" name="text1" id="text1">                
             </div>
                  <input type="submit" name="submit" value="提交">					
			</div>
        </form>
		</div>
		<div data-role="footer" data-position=”fixed">
				<p align="center"><span style="font-family:arial;">Copyright &copy;2019 浙江农林大学</span></p>
			</div>	
    </body>
</html>
