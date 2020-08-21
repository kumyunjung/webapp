<meta charset="utf-8">
<?php

    include "inc/db.php"; //db연결

    $s_opt = $_POST['s_opt'];
    $s_name = $_POST['s_name'];
    $s_phone = $_POST['phone1']. "-" . $_POST['phone2']. "-" .$_POST['phone3'];
    $s_zone = $_POST['s_zone'];
    $s_zipcode = $_POST['input_address'];
    $s_addr1 = $_POST['input_address3'];
    $s_addr2 = $_POST['input_address4'];
    $s_addr3 = $_POST['input_address5'];
    $s_email = $_POST['email1']. "@" . $_POST['email2'];
    $s_service = $_POST['s_service'];
    $s_wdate = date('Y-m-d');
    $s_ip = $_SERVER['REMOTE_ADDR'];

   $sql = mq("insert into shop(s_opt, s_name, s_phone, s_zone, s_zipcode, s_addr1, s_addr2, s_addr3, s_email, s_service, s_wdate, s_ip) values ('".$s_opt."','".$s_name."','".$s_phone."','".$s_zone."','".$s_zipcode."','".$s_addr1."','".$s_addr2."','".$s_addr3."','".$s_email."','".$s_service."','".$s_wdate."','".$s_ip."')");

   ?>
   <script>
   alert('정보를 등록하였습니다');
   location.href="shop_list.php";
   </script>