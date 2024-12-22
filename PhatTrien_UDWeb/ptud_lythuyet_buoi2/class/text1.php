<?php 
     class checklogin{
	 	public function login($username, $password, $login)
		{
			$ketqua = '';
			switch($_POST[$login])
			{
				case 'login':
				{
					if($username != '' && $password != '')
					{
						if($username == 'admin' && $password == '123456')
							$ketqua = '<h2>Welcome Admin!</h2>';			
						else
							$ketqua = '<h2>You are not Admin!</h2>';
					}
					else
						$ketqua = '<h2>Vui long nhap username va password!!!</h2>';
				}
				break;
			}
			return $ketqua;
		 }
	 }
?>	