<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자모드</title>
</head>
<body>
    <div>
        <h1>관리자모드</h1>
        <form method="post" action="admin_ok.php">
            <table align="center" border="0" cellspacing="0" width="300">
                <tr>
                    <td>아이디</td>
                    <td><input type="text" name="user_id" require></td>
                </tr>
                <tr>
                    <td>비밀번호</td>
                    <td><input type="password" name="user_pass" require></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="로그인"></td>
                </tr>
            </table>    
        </form>
    </div>
</body>
</html>