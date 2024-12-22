
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    // error_reporting(0);
    include('class/clsTuan11.php');
    $p = new pheptinh();

    if(isset($_REQUEST['btnSubmit']))
    {
        $a = $_REQUEST['txta'];
        $b = $_REQUEST['txtb'];
        $tt = $_REQUEST['btnSubmit'];
        $kq = $p->tinhtoan($a, $b, $tt);

    }
?>
<body>
    <form action="#" method="POST">
        <table>
            <tr>
                <td> 
                    So thu nhat:
                    <input type="number" name="txta" id="" value="<?php if(isset($a)) echo $a;  ?>">
                </td>
            </tr>
            <tr>
                <td>
                    So thu hai: 
                    <input type="number" name="txtb" id="" value="<?php if(isset($b )) echo $b;  ?>">
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btnSubmit" id="" value="+">
                </td>
                <td>
                    <input type="submit" name="btnSubmit" id="" value="-">
                </td>
                <td>
                    <input type="submit" name="btnSubmit" id="" value="*">
                </td>
                <td>
                    <input type="submit" name="btnSubmit" id="" value="/">
                </td>
                <td>
                    <input type="submit" name="btnSubmit" id="" value="%">
                </td>
            </tr>
            <tr>
                <td>
                    Ket qua:
                    <input type="text" name="ketqua" id="" value="<?= $kq ?>">
                </td>
            </tr>

        </table>
        

    </form>

</body>
</html>