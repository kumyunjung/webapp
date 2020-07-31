<meta charset="utf-8">

<?php

$conn=mysqli_connect("localhost", "yuunjuun", "gmdals9278!", "yuunjuun");

$id = $_POST["id"];


$sql = "select * from member where m_id='$id'";
$result=mysqli_query($conn, $sql);
$member=mysqli_fetch_array($result);

if($member["m_id"]==$id){
    session_start();
    $_SESSION['id']=$id;
    
    
    echo "<script>alert('회원님의 비밀번호를 변경합니다.');location.href='pw_update.php';</script>";
}else{
    echo "<script>alert('아이디가 없습니다.');history.back();</script>";
}



?>

