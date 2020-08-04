<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원정보찾기</title>
    <link rel="stylesheet" href="css/find.css">
</head>

<body>
    <div id="wrap">
        <header>
            <a href="index.html"><img src="img/logo.png" alt="logo"></a>
        </header>
        <div id="findId">
            <form method="post" action="find_id.php">
                <label for="nick">닉네임</label>
                <input type="text" name="nick" id="nick">
            
                <label for="phone">전화번호</label>
                <input type="text" name="phone" id="phone">
                <input type="submit" class="btn" value="아이디찾기">
            </form>
        </div>

        <div id="findPwd">
            <form method="post" action="find_pwd.php">
                <label for="id">아이디</label>
                <input type="text" name="id" id="id">
                <input type="submit" class="btn" value="비밀번호찾기">
            </form>
        </div>
    </div>
</body>

</html>