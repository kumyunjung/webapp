<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Document</title>
    <script>
        function refresh_capt() {
            document.getElementById("capt_img").src="captcha.php?waste="+Math.random();
        }
    </script>
</head>
<body>
    <form name="test" action="test2_ok.php" method="post">
       <h2>자동가입방지문구 입력</h2>
       <img src="captcha.php" id="capt_img" title="captcha" alt="captcha">
       <input type="text" name="captcha">
       <input type="submit" value="확인">
    </form>
    <button onclick="refresh_capt();">새로고침</button>
</body>
</html>