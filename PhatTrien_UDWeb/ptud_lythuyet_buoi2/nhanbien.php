<?php
    error_reporting(0);
    if(isset($_REQUEST['btnSubmit']) && $_REQUEST['btnSubmit'] == 'Send')
        echo "Gia tri nhan dc la: ".$_POST['txtText'];
    else
        echo 'Ban ko co quyen truy cap';
?>