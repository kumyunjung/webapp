<?php
//자동가입방지문자를 생성하는 코드

session_start();
header('Content-Type: image/gif');
//header 콘텐츠타입을 이미지 형식으로 만듦

$captcha = '';

//패턴
$pattern = '123456789QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm';


//패턴설정
for($i = 0, $len = strlen($pattern) -1; $i < 6; $i++) { //6가지 문자 생성
    $captcha .= $pattern[rand(0, $len)];
}

$_SESSION['capt'] = $captcha;

$img = imagecreatetruecolor(60, 20); //넓이, 높이
imagefilledrectangle($img, 0,0,100,100,0xc80000); //배경색
imagestring($img,5,3,3, $captcha, 0xffffff); //문자여백 및 색상
imageline($img,0,rand() % 20,100,rand() % 20, 0x001458); //줄 색상
imagegif($img);
imagedestroy($img);
?>
