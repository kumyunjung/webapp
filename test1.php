<!DOCTYPE html>
<html lang="ko">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function frmSubmit() {
            document.test.submit();
        }
    </script>
    <title>Document</title>
</head>
<body>
    <form name="test" action="test_ok.php" method="post">
        이름 : <input type="text" name="name" id=""><br>
        전화번호 : <input type="text" name="tel" id=""><br>

       <button class="g-recaptcha" data-sitekey="6LftvL0ZAAAAAIzn7cTR3tVeo-kSPEeQzZkD3K4w" data-callback="frmSubmit">제출</button>
    </form>
</body>
</html>