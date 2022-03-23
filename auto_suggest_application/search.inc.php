<?php


if(isset($_GET['search_text'])){
    $search_text = $_GET['search_text'];
}

$link = mysqli_connect('localhost', 'root', '', 'mappoll');
if(!empty($search_text)){
    if($link){
        $query = "SELECT `username` FROM `users` WHERE `username` LIKE '".mysqli_real_escape_string($link, $search_text)."%'";
        $query_run = mysqli_query($link, $query);
    
        while($query_row = mysqli_fetch_assoc($query_run)){
           echo $name = $query_row['username']."\n";
        }
    }
}

?>