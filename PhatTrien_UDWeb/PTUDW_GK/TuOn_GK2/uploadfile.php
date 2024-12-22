<?php
error_reporting(0);
session_start();
include('myclass/clsupload.php');
$p = new upload();


if(isset($_SESSION['user']) && isset($_SESSION['pass']))
{
	include('dangnhap/classlogin/clslogin.php');
	$a = new login();
	$a->confirmlogin($_SESSION['user'], $_SESSION['pass']); 
} else
{
	header('location:dangnhap/login.php');
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=	utf-8" />
	<title>Untitled Document</title>
</head>

<body>
	<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
		Chọn file cần upload
		<label>
			<input type="file" name="myfile" id="myfile" value="Chọn file" />
		</label>
		<label>
			<input type="submit" name="nut" id="nut" value="Tải lên" />
		</label>
	</form>
    
    
	<?php
	if ($_POST['nut'] == 'Tải lên') {
		$name=$_FILES['myfile']['name'];
		$tmp_name=$_FILES['myfile']['tmp_name'];
		$size=$_FILES['myfile']['size'];
		$type=$_FILES['myfile']['type'];
		$error=$_FILES['myfile']['error'];
		
		$target_dir = '21010471/MYDATA';
		$file_ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
		$allow_ext = array('xlsx', 'rar');  
		
		if($file_ext != 'php')
		{
			echo $size;
			if(in_array($file_ext, $allow_ext))
			{	
				// 1048576Bytes = 1M
				if($size<=2097152)
				{
					//$new_filename = md5(uniqid()) . '-'. time() .'.' . $fileExtension;
					$new_filename = md5(uniqid()) . '-'. time() .'.'.$name;
					if ($p->uploadfile($new_filename, $tmp_name, $target_dir)) {
						echo '<b>Upload thành công</b>';
					} else {	
						echo '<b>Upload thất bại</b>';
					}
				}else
				{
					echo 'Chỉ dc upload file dưới 1MB';
				}	
			}else
			{
				echo '<b>Chỉ dc upload file .xlsx và .rar</b>';
			}
		}else
		{
			echo 'Không dc upload file .php';
		}
		
	}
	
	//$target_dir = "uploads/";
	//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	//if (file_exists($target_file)) {
    //  echo "Sorry, file already exists.";
    // $uploadOk = 0;
    //}

	?>
	
</body>

</html>