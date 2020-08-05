<?
session_start();

$db = new mysqli ("localhost", "yuunjuun", "gmdals9278!", "yuunjuun");
$db -> set_charset("utf8");

function mq($sql) {
    global $db;
    return $db->query($sql);
}

?>