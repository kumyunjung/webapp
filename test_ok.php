<meta charset="UTF-8">

<?php

//php.ini 설정 파일에서 allow_url_fopen = on

if(isset($_POST['g-recaptcha-response'])){
    $captcha=$_POST['g-recaptcha-response'];
}
//isset : 값이 비어있는지 확인하는 함수

if(!$captcha) {
    echo '리캡챠를 확인하세요.';
}

$secretKey = "6LftvL0ZAAAAAAzaz5SXJYCjRjZjmYSGMeoxeSGK";
//발급받은 비밀키 값

$ip = $_SERVER['REMOTE_ADDR'];
//접속한 아이피 확인

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);

//file_get_contents : 원격파일이 존재하는지 확인하기 위해
//file_get_contents($url, false, null,1)

$responseKey = json_decode($response, true);

//json_decode : json을 php로 배열로 변환해주는 함수
//json_encode : php 배열을 json 형식으로 변환해주는 함수

//json (인터넷에서 자료를 주고 받을 때 표현하는 표준 포맷)
//ajax (비동기 브라우저 통신) 대체

if(intval($responseKey["success"]) !== 1) {
    echo '당신은 로봇입니다';
}else {
    echo '당신은 사람입니다.';
}
?>