<?php
error_reporting(0);
include('classlogin/clslogin.php');
$p = new login();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
</head>

<body>
  <form id="form1" name="form1" method="post" action="">
    <table width="469" border="3" align="center">
      <tr>
        <td colspan="2" align="center"><strong>NHẬP THÔNG TIN ĐĂNG NHẬP</strong></td>
      </tr>
      <tr>
        <td width="170">Nhập username</td>
        <td width="279"><label>
            <input type="text" name="txtuser" id="txtuser" />
          </label></td>
      </tr>
      <tr>
        <td>Nhập password</td>
        <td><label>
            <input type="password" name="txtpass" id="txtpass" />
          </label></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><label>
            <input type="submit" name="nut" id="nut" value="Đăng nhập" />
            <input type="reset" name="reset" id="reset" value="Submit" />
          </label></td>
      </tr>
    </table>
    <div align="center">
      <?php
      if($_POST['nut'] == 'Đăng nhập') {
        $user = $_REQUEST['txtuser'];
        $pass = $_REQUEST['txtpass'];
		
		
        if($user!='' && $pass!='') 
		{
			echo $user;
			echo $pass;
          	if($p->mylogin($user, $pass) == 0)
            	echo '<b>Sai thông tin đăng nhập</b>';
        }else
        	echo '<b>Vui lòng nhập thông tin</b>';
      } 
      ?> 
      
    </div>
  </form>
</body>

</html>