<meta charset="utf-8">
<link rel="stylesheet" href="css/pw_update.css">
<?php

$conn=mysqli_connect("localhost", "yuunjuun", "gmdals9278!", "yuunjuun");
session_start();

 if(isset($_SESSION['id'])){
   ?>


<body>
    <header>
        <a href="index.html"><img src="img/logo.png" alt="logo"></a>
    </header>
    <div id="wrap">
        <form method="post" action="pw_update_ok.php">
            <label for="pass">비밀번호</label>
            <input type="password" name="pass" id="pass">
            <input type="submit" class="btn" value="변경">
        </form>
    </div>
</body>

<?php
 }else{
     echo "<script>alert('잘못된 접근입니다.');history.back();</script>";
 }
?>