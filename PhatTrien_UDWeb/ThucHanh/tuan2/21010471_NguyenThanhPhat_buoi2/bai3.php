<?php 
	error_reporting(0);
	include ("myclass/clsmang.php");
	$p = new mang();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="styles.css">

</head> 
<body>


<?php 
	 $n=1000;
	 $a=array($n);
	 $p->nhapmang($a, $n);
	 $p->xuatmang($a, $n);	
?>

 
</body>
</html>