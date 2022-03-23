<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
$http_refer = $_SERVER['HTTP_REFERER'];

function getfield($field){
    global $connection;
    $u = implode($_SESSION['user_id']);
    if($query = mysqli_query ($connection, "SELECT `$field` FROM `user` WHERE `id` = '$u' ")){
        $result =  mysqli_fetch_assoc($query);
        return $result[$field];
    }

}
?>
