<meta charset="utf-8">

<?php

session_start();
$conn=mysqli_connect("localhost","yuunjuun","gmdals9278!","yuunjuun");

$pass=md5($_POST['pass']);

$sql="update member set m_pass='".$pass."' where m_id='".$_SESSION['id']."'";

$result=mysqli_query($conn, $sql);
// $member=mysqli_fetch_array($result);

session_destroy();
// 세션종료

echo "<script>alert('비밀번호를 변경하였습니다. 다시 로그인 하시기 바랍니다.');
location.href='index.html';</script>";


?>