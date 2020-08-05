<?php
include "../inc/db.php";

$sql = mq("select * from admin"); //여러가지가 존재한다면 adm_idx 값을 받아온다.
$result = $sql->fetch_array();
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자모드</title>
</head>
<body>
    <div>
        <h1>정보수정</h1>
            <form method="post" action="shop_edit_ok.php">
                <table border="1">
                    <tr>
                        <td>아이디</td>
                        <td><?php echo $result['adm_id'];?></td>
                    </tr>
                    <tr>
                        <td>비밀번호</td>
                        <td><input type="password" name="user_pass" value="<?php echo $result['adm_pass']; ?>"></td>
                    </tr>
                    <tr>
                        <td>이름</td>
                        <td><input type="text" name="user_name" value="<?php echo $result['adm_name']; ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="수정"></td>
                    </tr>        
                </table>        
            </form>
    </div>
</body>
</html>