<meta charset="utf-8">

<?php

$conn=mysqli_connect("localhost", "yuunjuun", "gmdals9278!", "yuunjuun");

$id = $_GET["id"];

$sql = "select * from member where m_id='$id'";
$result=mysqli_query($conn, $sql);
$member=mysqli_fetch_array($result);


if($member==0){
    ?>
<?php echo $id; ?>는 사용 가능한 아이디 입니다.

<?php
}else {
    ?>
<?php echo $id; ?>는 중복된 아이디입니다.
<?php
}
?>
<button value="닫기" onclick="window.close()">닫기</button>
