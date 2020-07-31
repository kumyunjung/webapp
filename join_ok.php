<meta charset="utf-8">

<?php

$conn=mysqli_connect("localhost", "yuunjuun", "gmdals9278!", "yuunjuun");



$user_id=$_POST['id'];
// $user_pass=base64_encode($_POST['pass']);
$user_pass=md5($_POST['pass']);
/* 암복호화 알고리즘 : 패스워드, 암호 등 
base64_encode(암호화) = base64_decode(복호화)
md5(암호화) --많이 씀
bcrypt 암호화스크립트방식

php 내장함수
*/
$user_nick=$_POST['nick'];
$user_phone=$_POST['phone'];
$user_zipcode=$_POST['zipcode'];
$user_address1=$_POST['address1'];
$user_address2=$_POST['address2'];
$user_address3=$_POST['address3'];

$query="insert into member(m_id, m_pass, m_nick, m_phone, m_zipcode, m_addr1, m_addr2, m_addr3, m_wdate, m_ip, m_x, m_y, opt1, opt2) values('$user_id', '$user_pass','$user_nick', '$user_phone', '$user_zipcode', '$user_address1', '$user_address2', '$user_address3', '$user_wdate', '$user_ip','$user_x','$user_y','$opt1','$opt2')";


$result=mysqli_query($conn, $query);



?>
<script>
alert("회원가입이 완료되었습니다.");
location.href="index.html";
</script>