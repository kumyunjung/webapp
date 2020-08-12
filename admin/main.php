<?php
include "../inc/db.php";

$sql = mq("select * from admin "); // 여러가지가 존재한다면 adm_idx 값을 받아온다.
$result = $sql->fetch_array();

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title> 관리자 모드 </title>
</head>
<body>
    <div>
    <h1>관리자 모드</h1>
    <form action="main_ok.php" method="POST" enctype="multipart/form-data">
    
    <!-- 파일첨부 -->
    <div id="in_file">
        <input type="file" value="" name="file">
    </div>

    <div id="in_link">
        링크 : <input type="text" name="m_link" value="http://">
    </div>

    <div id="in_target">
        타겟 <select name="m_target">
        <option value="">--선택--</option>
        <option value="blank">_blank</option>
        <option value="_top">_top</option>
        </select>
    </div>

    <div id="in_lock">
        <input type="checkbox" value="1" name="m_lock">숨김
    </div>
    
    <div id="in_submit">
        <input type="submit" value="등록">
    </div>

    </form>

    </div>
</body>
</html>