<meta charset="UTF-8">

<?php

include "../inc/db.php";        //DB연결

$m_link = $_POST['m_link'];
$m_target = $_POST['m_target'];

if(isset($_POST['m_lock'])) {
    $m_lock = '1';
} else {
    $m_lock = '0';

}

$tmpfile = $_FILES['file']['tmp_name'];
// 임시파일명으로 변경함.
$o_name = $_FILES['file']['name'];
// 원래 파일명을 변수에 지정함.
$filename = iconv("UTF-8","EUC-KR",$_FILES['file']['name']);
// iconv([입력캐릭터셋],[변환하고자하는 캐릭터셋],[문자열])
$folder = "upload/".$filename;

move_uploaded_file($tmpfile,$folder);


$sql = mq("insert into main(file,m_lock,m_link,m_target)values('".$o_name."','".$m_lock."','".$m_link."','".$m_target."')");


?>


    <script>
    alert('파일을 등록했습니다.');
    location.href="main_list.php";
    </script>