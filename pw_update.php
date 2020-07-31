<meta charset="utf-8">

<?php

$conn=mysqli_connect("localhost", "yuunjuun", "gmdals9278!", "yuunjuun");
session_start();

 if(isset($_SESSION['id'])){
   ?>


 <div>
 <form method="post" action="pw_update_ok.php">
     <h1>비밀번호 변경</h1>
 <fieldset>
 <label for="">비밀번호 변경 : </label>
 <input type="password" name="pass" placeholder="변경할 비밀번호">
 <input type="submit" value="변경">
 </fieldset>
 </form>

 </div>

 <?php
 }else{
     echo "<script>alert('잘못된 접근입니다.');history.back();</script>";
 }
?>