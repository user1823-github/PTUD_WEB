<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="txtTenThuongHieu" id="">
        <input type="submit" name='btnThem' value="Thêm Thương Hiệu">
    </form>
</body>
</html>
<?php
    if(isset($_POST['btnThem'])){
        $servername = "localhost";
        $username = "thanhphat";
        $password = "123456";
        $dbname = "thanhphatdb";
        $tenTH = $_POST['txtTenThuongHieu'];
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if ($conn) {
            $tenTH = $_POST['txtTenThuongHieu'];
            $sql = "insert into thuonghieu(TenThuongHieu) values('$tenTH')";
            echo $sql;
            // thực thi truy vấn
            $result = $conn->query($sql);
            if ($result) {
                echo '<script>alert("Thêm thành công!")</script>';
            } else {
                echo '<script>alert("Thêm thất bại!")</script>';
            }
            $conn->close();
        } else {
            echo '<script>alert("Connect Failed")</script>';
        }
    }
?>