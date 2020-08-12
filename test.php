<!DOCTYPE html>
<html lang="ko">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function frmSubmit() {
            if(grecaptcha.getResponse()=="") {
                alert("리캡챠를 체크하세요");
                return false;
            }else {
                return true;
            }
        }
    </script>
    <title>Document</title>
</head>
<body>
    <form name="test" action="test_ok.php" method="post" onsubmit="return frmSubmit();">
        이름 : <input type="text" name="name" id=""><br>
        전화번호 : <input type="text" name="tel" id=""><br>
        <input type="submit" name="submit" value="제출"><br><br>
        <div class="g-recaptcha" data-sitekey="6LftvL0ZAAAAAIzn7cTR3tVeo-kSPEeQzZkD3K4w"></div>
    </form>
</body>
</html>