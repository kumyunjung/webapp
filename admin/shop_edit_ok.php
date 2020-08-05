<meta charset="UTF-8">

<?php

include "../inc/db.php";        //DB연결


$user_pass = $_POST['user_pass'];
$user_name = $_POST['user_name'];

$sql=mq("update admin set adm_pass='".$user_pass."', adm_name='".$user_name."'");

echo "<script>alert('정보를 변경하였습니다');location.href='shop_edit.php';</script>"

?>