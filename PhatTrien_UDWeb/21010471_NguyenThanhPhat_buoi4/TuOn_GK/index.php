<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<div class="container">
        <div class="left">
            <a href="index.php">Trang chủ</a>
            <a href="index.php?login">Đăng nhập</a>
        </div>
        <div class="right">
        	<?php
            	if(isset($_REQUEST['login']))
				{
					include_once('dangnhap/login.php');
				}
				elseif(isset($_REQUEST['xlylogin']))
				{
					include_once('dangnhap/loginxly.php');
				}
				else
				{
					echo '<b>Day la trang chu</b>';
				}
			
			?>
        </div>
	</div>

</body>
</html>
