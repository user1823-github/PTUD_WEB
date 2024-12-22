<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body> 

    <div id="content">
        <div id="left">
            <ul type="none">
                <li><a href="index.php">Trang chủ</a></li>
                <li> 
                    <?php
                        if (isset($_SESSION['username'])) {
                            echo '<a href="index.php?logout">Đăng xuất</a>';
                        }else
                        {
                            echo '<a href="index.php?login">Đăng nhập</a>';
                        }
                    ?>
                </li>
            </ul>
        </div>
        <div id="right">
            <?php
                if(isset($_REQUEST['login']))
                    include_once('login.php');
                elseif(isset($_REQUEST['logout']))
                    include_once('xlLogout.php');
                elseif(isset($_REQUEST['xlLogin']))
                    include_once('xlLogin.php');
                elseif(isset($_SESSION['username']))
                    echo "Welcome ".$_SESSION['username'];
                else
                    echo 'Đây là trang chủ';
            ?>
                    
        </div>
    </div>
</body>
</html>