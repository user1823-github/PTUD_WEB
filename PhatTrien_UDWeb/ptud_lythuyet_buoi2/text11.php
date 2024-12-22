<?php 
    error_reporting(0);
	include('myclass/dologin.php');
	$p = new checklogin(); 
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body> 
<form name="form1" method="POST" action="">
  <table width="450" border="3" align="center">
    <tr>
      <td width="152"><div align="center">User name</div></td>
      <td width="278"><label>
        <input type="text" name="username" id="username">
      </label></td>
    </tr>
    <tr>
      <td><div align="center">Password</div></td>
      <td><label>
        <input type="text" name="password" id="password">
      </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center">  
      	<input name="login" type="submit" id="login" value="Đăng nhập"> 
      </td>
    </tr>
  </table>
</form>
</body>
</html>