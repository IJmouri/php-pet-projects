<?php

$connection = mysqli_connect('localhost', 'root', '');

$my_sql_db = "a_database1";
if ($connection) {
    if (mysqli_select_db($connection, "a_database1")) {
       // echo 'connected';
    }
}
?>