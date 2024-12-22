<?php
  error_reporting(0);
  include('./myclass/createTable.php');

  $p = new table();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style/bai2.css">
</head>
<body>
<form id="form2" name="form2" method="post">
  <table width="950" border="1" align="center">
    <tbody>
      <tr>
        <td width="414" align="center"><label for="hang">Nhập số hàng (rows):</label>
        <input type="text" name="hang" id="hang"></td> 
      </tr>
      <tr>
        <td colspan="2" align="center"><input name="taobang" type="button" id="button" value="Tạo bảng"></td>
      </tr>
    </tbody>
  </table>
 
</form>

<?php
  if(isset($_POST['taobang']) && $_POST['taobang'])
  {
    $n = $_REQUEST['hang'];
    $a = $p->taoBang($n);

  }

?>

<!-- <form id="form1" name="form1" method="post">
  <table width="950" border="1" align="center">
    <tbody>
      <tr class="tieude">
        <td width="145" align="center"><strong>STT</strong></td>
        <td width="299" align="center"><strong>Loại CPU</strong></td>
        <td width="247" align="center"><strong>Thông Số Kỹ Thuật</strong></td>
        <td width="231" align="center"><strong>Giá Thành</strong></td>
      </tr>
      <tr>
        <td align="center"><strong>1</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr class="chanle">
        <td align="center"><strong>2</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center"><strong>3</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
    </tbody>
  </table>
</form>  -->

  
</body>
</html>