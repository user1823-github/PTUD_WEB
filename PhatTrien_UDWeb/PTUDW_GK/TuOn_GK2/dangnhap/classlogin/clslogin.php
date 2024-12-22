<?php
	class login
	{
		public function mylogin($user, $pass)
		{
			if($user=='admin' && $pass=='123456')
			{
				session_start();
				$_SESSION['user']=$user;
				$_SESSION['pass']=$pass;
				header('location:../uploadfile.php');
			}else
				return 0;
		}
		
		public function confirmlogin($user, $pass)
		{
			if($user!='admin' || $pass!='123456')
			{
				header('location:dangnhap/login.php');
			} 
		}
		 
	}
?>