<?php
	if(isset($_POST['btnlogin']))
	{
		$username = $_REQUEST['txtuser'];
		$password = $_REQUEST['txtpass'];
		if($username == 'sinhvien' && $password == 'fit-iuh')
		{
			echo "<b>Dang nhap thanh cong!</b>";
			echo "<script>alert('Dang nhap thanh cong! Vui long cho trong giay lat')</script>";
			//header('location: ../uploadfile.php');
			header('refresh:0.5; url=uploadfile.php');
		}
		else
		{
			echo "<script>alert('Dang nhap that bai!')</script>";
			echo "<b>Dang nhap that bai!</b>"; 
			//header('location: index.php');
			header('refresh:0.5; url=index.php');
		}
 	}
	

?>