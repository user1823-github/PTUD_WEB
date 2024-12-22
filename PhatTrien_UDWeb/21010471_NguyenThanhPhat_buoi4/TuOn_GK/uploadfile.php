<?php
	error_reporting(0);
	include('myclass/upload.php');
	
	$p = new myfile();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  Mời bạn chọn file cần upload
  <label>
  <input type="file" name="myfile" id="myfile" />
  </label>
  <label>
  <input type="submit" name="nut" id="nut" value="upload" />
  </label>
</form>
<?php
	switch($_POST['nut'])
	{
		case 'upload':
		{
			$name=$_FILES['myfile']['name'];
			$tmp_name=$_FILES['myfile']['tmp_name'];
			$size=$_FILES['myfile']['size'];
			$type=$_FILES['myfile']['type'];
			$error=$_FILES['myfile']['error'];
			
			//echo $name; //echo $tmp_name; //echo $size; //echo $type; //echo $error;
			
			$targer_dir='21010471/MYDATA/';
			$targer_file = $targer_dir.basename($name);
			
			$ext_file = pathinfo($targer_file, PATHINFO_EXTENSION);
			//$filename = pathinfo($name, PATHINFO_FILENAME);
			$ext_allow= array('xlsx', 'rar');
			
			//$filename = explode('.', $name);
			//$ext = end($filename);	
			
			if(in_array($ext_file, $ext_allow))
			{
				$max_size = 1048576;
				if($size <= $max_size)
				{
					if(file_exists($targer_file))
					{
						$new_filename = md5(uniqid()).$name;
						if($p->uploadfile($new_filename, $tmp_name, $targer_dir) == 1)
						{
							$counter = $counter+1;
							echo '<b>Upload thanh cong</b>';
						}else
						{
							echo '/b>Upload that bai</b>';
						}
					 }	
				}else
				{
					echo '<b>Kich thuoc file phai <= 1MB</b>';
				} 
			}else
			{
				echo '<b>Chi duoc upload file .xlsx hoac .rar</b>';
			} 
			break;
		}
	}
?>

</body>
</html>
