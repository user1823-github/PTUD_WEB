<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "thanhphat";
    $password = "123456";
    $dbname = "thanhphatdb";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn) {
        $sql = 'select * from thuonghieu';
        // thực thi truy vấn
        $tbThuongHieu = $conn->query($sql);
        if ($tbThuongHieu->num_rows > 0) {
            // duyệt từng dòng trong kq
            while ($r = $tbThuongHieu->fetch_assoc()) {
                echo "<p>" . $r['TenThuongHieu'] . "</p>";
                // echo "id: ".$r["IDThuongHieu"]." - Name: ".$r["TenThuongHieu"]. " ".$r["Ghichu"]."<br>";
            }
            echo '<script>alert("Có dữ liệu")</script>';
        } else {
            echo '<script>alert("0 results!")</script>';
        }
        $conn->close();
    } else {
        echo '<script>alert("Connect Failed")</script>';
    }
    ?>
</body>

</html>