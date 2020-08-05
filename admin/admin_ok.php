<meta charset="UTF-8">

<?php

include "../inc/db.php";        //DB연결


$user_id = $_POST['user_id'];
$user_pass = $_POST['user_pass'];

// POST를 넘겨온 값을 각각 변수에 지정한다.

$sql=mq("select * from admin where adm_id='".$user_id."' and
adm_pass='".$user_pass."'");
// 해당 값을 select문에 대입하여 정보를 불러낸다.

$result=$sql->fetch_array();
// 해당되는 값의 정보를 나열한다.

if($result["adm_id"]==$user_id and $result["adm_pass"]==$user_pass) {
    echo "<script>alert('관리자로 로그인 하였습니다.');location.href='index.php';</script>";

} else {
    echo "<script>alert('잘못된 정보입니다.');history.back();</script>";
}

?>