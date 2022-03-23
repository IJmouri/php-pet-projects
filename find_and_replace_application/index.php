<?php

$offset = 0;

 if(isset($_POST['user_input']) && isset($_POST['search-for']) && isset($_POST['replace']) && !empty($_POST['user_input'])){
     $user_input = $_POST['user_input'];
     $search = $_POST['search-for'];
     $replace = $_POST['replace'];
     $str_length = strlen($search);
     if(!empty($_POST['user_input']) && !empty($_POST['search-for']) && !empty($_POST['replace'])){
       
         while( $strpos = strpos($user_input, $search, $offset)){
            
             $offset = $strpos + $str_length;
             $user_input = substr_replace($user_input, $replace, $strpos, $str_length );
         }
         echo $user_input;
     }else{
         echo 'Please fill all the field';
     }
 }

?>
<form action="index.php" method="post">
    <textarea name="user_input" rows="6" cols="30"><?php echo $user_input; ?></textarea>
    <br>Search For:<br>
    <input type = "text" name="search-for">
    <br>Replace with:<br>
    <input type="text" name="replace">
    <input type="submit" value="Submit">
</form>