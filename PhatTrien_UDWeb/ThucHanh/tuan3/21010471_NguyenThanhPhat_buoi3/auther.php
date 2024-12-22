<?php

    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];
        $name = $_REQUEST['ten'];
        $ketqua = '<p>Hi there, <b>';
        if($id == '1')
            $ketqua .= $name.'! </b></p>';
        else if($id == '2')
            $ketqua .= $name.'! </b></p>';
        else if($id == '3')
            $ketqua .= $name.'! </b></p>';
        else
            $ketqua = '<b>Khong co tac gia nay</b>';

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hi User</h1>
    <p>PHP programs that receives a value from "WhatsName"</p>
    <?php
        echo $ketqua;
    
    ?>
</body>
</html>