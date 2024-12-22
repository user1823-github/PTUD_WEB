<?php
	include('./myClass/clsTinhToan.php')
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
	$x=3; 
	$y=4;
	echo '<b>1. Phép cộng:</b> ';
	echo $x." + ".$y.' = '.$x+$y.'<br>';
	
	echo '<b>2. Phép trừ:</b> ';
	echo $x." + ".$y.' = '.$x-$y.'<br>';
		
	echo '<b>3. Phép nhân:</b> ';
	echo $x." * ".$y.' = '.$x*$y.'<br>';
	
	echo '<b>4. Phép chia:</b> ';
	echo $x." / ".$y.' = '.$x/$y.'<br>';
?>
Nhập số a: 
<form id="form1" name="form1" method="post"

</body>
</html>