<?php
include "../inc/db.php";

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title> 관리자 모드 </title>
</head>

<body>
    <div>
        <h1>메인이미지</h1>
        <table>
            <thead>
                <tr>
                    <th width="150">이미지</th>
                    <th width="100">링크</th>
                    <th width="80">타겟</th>
                    <th width="50">숨김</th>
                </tr>
            </thead>
            <?php
                $sql = mq("select * from main");
                while($board = $sql->fetch_array())
                {
            ?>
            <tbody>
                <tr>
                    <td><a href="<?php echo $board['m_link']; ?>" target="<?php echo $board['m_target'];?>"><img src="upload/<?php echo $board['file']; ?>" width="150"></a></td>
                    <td><?php echo $board['m_link']; ?></td>
                    <td><?php echo $board['m_target']; ?></td>
                    <td><?php echo $board['m_lock']; ?></td>
                </tr>
            </tbody>
                <?php } ?>
        </table>

        <div>
            <a harf="main.php"><button>글쓰기</button></a>
        </div>
    </div>
</body>
</html>