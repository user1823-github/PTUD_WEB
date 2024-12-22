<?php 
error_reporting(0);
include ("myclass/clsfile.php");
$p = new myfile();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" enctype="multipart/form-data" name="form1" id="form1">
Mời bạn chọn file cần upload
  <label for="myfile">File:</label>
  <input type="file" name="myfile" id="myfile">
  <input type="submit" name="nut" id="nut" value="Tải lên">
</form>

<?php
switch($_POST['nut'])
{
	case 'Tải lên':
	{
		$name=$_FILES['myfile']['name'];
		$size=$_FILES['myfile']['size'];
		$type=$_FILES['myfile']['type'];
		$tmp_name = $_FILES['myfile']['tmp_name'];
		$error_file = $_FILES['myfile']['error'];
		echo $name.'-'.$size.'-'.$type.'-'.$tmp_name.'-'.$error_file;
		
		if($type=='application/pdf')
		{
			/*echo 'Upload file PDF thành công';*/
			if($p->upload($name, $tmp_name, "data") == 1)
			{
				echo 'Upload thành công';		
			}
			else 
			{
				echo 'Upload thất bại';		
			}
		}
		else 
		{
			echo 'Chỉ được upload file PDF';
		}
		break;	
	}	
}

?>
</body>
</html>




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
			
			echo $name;
			echo $tmp_name;
			echo $size;
			echo $type;
			echo $error;
			
			$targer_dir='21010471/MYDATA/';
			$targer_file = $targer_dir.basename($name);
			
			$ext_file = pathinfo($targer_file, PATHINFO_EXTENSION);
			$ext_allow= array('xlsx', 'rar');
			
			if(in_array($ext_file, $ext_allow))
			{
				$max_size = 1048576;
				if($size <= $max_size)
				{
					
					if(file_exists($targer_file))
					{
						$counter = 1;
						
						$name = $name.'_'.$counter;
						if($p->uploadfile($name, $tmp_name, $targer_dir) == 1)
						{
							$counter++;
							echo 'Upload thanh cong';
						}else
						{
							echo 'Upload that bai';
						}
					 }		
				}else
				{
					echo 'Kich thuoc file phai <= 1MB';
				} 
			}else
			{
				echo 'Chi duoc upload file .xlsx hoac .rar';
			}
			
			
			
			break;
		}
	}
?>

</body>
</html>
