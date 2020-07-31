<meta charset="utf-8">

<?php

$conn=mysqli_connect("localhost", "yuunjuun", "gmdals9278!", "yuunjuun");

$nick = $_POST["nick"];
$phone = $_POST["phone"];

$sql = "select * from member where m_nick='$nick' and m_phone='$phone'";
$result=mysqli_query($conn, $sql);
$member=mysqli_fetch_array($result);

if($member["m_nick"]==$nick){
    echo "<script>alert('회원님의 ID는 ".$member['m_id']."입니다.');history.back();</script>";
}else{
    echo "<script>alert('해당 정보가 없습니다.');history.back();</script>";
}



?>

