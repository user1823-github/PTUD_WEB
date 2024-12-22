<?php
    if(isset($_SESSION['username']))
    {
        session_destroy();
        echo "<script>alert('Bạn đã đăng xuất!')</script>";
        header('refresh:1; url=index.php');
    }
?>