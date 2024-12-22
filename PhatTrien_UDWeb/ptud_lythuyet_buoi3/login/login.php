<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body> 
    <form name="frmLogin" action="index.php?xlLogin" method="POST">
        <table>
            <tr>
                <td>Tên đăng nhập</td>
                <td>
                    <input type="text" name="username" id="">
                </td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td>
                    <input type="text" name="password" id="">
                </td>
            </tr>   
            <tr> 
                <td colspan="2">
                    <input type="submit" name="btnLogin" value="Login">
                    <input type="reset"  name="btnReset" value="Reset">
                </td>
            </tr>   
        </table>
    </form>
    
</body>
</html>