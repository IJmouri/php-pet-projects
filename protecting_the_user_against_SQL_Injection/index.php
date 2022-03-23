<?php

include 'connect.inc.php';
include 'core.inc.php';

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
    echo 'you are logged in'.'<a href="logout.php">Log out</a>';
    echo getfield('firstname');
}else{
    include 'loginform.inc.php';

}

//echo $current_file;
?>
