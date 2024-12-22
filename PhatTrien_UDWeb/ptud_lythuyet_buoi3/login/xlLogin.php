<?php
    if(isset($_REQUEST['btnLogin']))
    {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        if($username == 'admin' && $password == '123456')
        {
            $_SESSION['username'] = $username;
            echo "<script>alert('Dang nhap thanh cong')</script>";
            header('refresh:1; url=index.php');
        }else
        {
            echo "<script>alert('Sai thong tin dang nhap')</script>";
            header('refresh:0.5; url=index.php');
        }

    }else
    {
        // trả về trang chủ
        echo "<script>alert(Ban ko co quyen truy cap')</script>";
        header('refresh:0.5; url=index.php');
    }
?>

