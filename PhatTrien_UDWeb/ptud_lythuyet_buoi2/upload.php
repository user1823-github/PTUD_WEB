<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="avatar">
        <input type="submit" name="btnUpload" value="Upload">
    </form>
</body>
<?php 
    if(isset($_REQUEST['btnUpload']))
    {
        if(isset($_FILES['avatar']))
        {
            $files = $_FILES['avatar']; 
            if(move_uploaded_file($files['tmp_name'],"img/".$files['name']))
                echo "<script>alert('Upload thanh cong')</script>"; 
            else 
                echo "<script>alert('Upload thanh cong')</script>"; 
    
            // foreach ($files as $k => $v) {
            //     echo "Key: {$k} {$v} <br />";
            // }


        }
    }
    // m =  x 1024, 
    // quy ve kieu b
?>
</html>