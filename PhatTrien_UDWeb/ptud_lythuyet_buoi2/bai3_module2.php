<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title> 
</head>
    
    <?php
        error_reporting(0);
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
    <form name="form1" method="POST" action="">
      <table width="555" border="3" align="center">
        <tr>
          <td width="185">
          	<label>a =
              <input name="txta" type="number" id="txta" value="<?php echo $a; ?>">
          	</label></td>
          <td width="185">
          	<label>b =
              <input name="txtb" type="number" id="txtb" value="<?php echo $b; ?>">
          	</label>
          </td>
          <td width="185">
              </label>
                <input type="submit" name="btnSubmit" id="" value="+">            
                <input type="submit" name="btnSubmit" id="" value="-">
                <input type="submit" name="btnSubmit" id="" value="*">
                <input type="submit" name="btnSubmit" id="" value="/">
              </label>
          </td>
        </tr> 
          <td colspan="3">
            Ket qua:
                    <input type="text" name="ketqua" id="" value="<?php echo $kq; ?>">
          </td>
          </tr>
      </table>
</form>
	

</body>
</html>