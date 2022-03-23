<?php

if(isset($_POST['username']) && isset($_POST['pass'])){
    if(!empty($_POST['username']) && !empty($_POST['pass'])){
        $pass_hash = md5($_POST['pass']);
        $username = $_POST['username'];
        $query = "SELECT `id` FROM `user` WHERE `username`='".mysqli_real_escape_string($connection,$username)."' AND `password` = '".mysqli_real_escape_string($connection, $pass_hash)."'";
        if($query_run = mysqli_query($connection, $query)){
            $query_num_rows = mysqli_num_rows( $query_run);
            if($query_num_rows == 0){
                echo 'invalid';
            }else if($query_num_rows == 1){
                $user_id = mysqli_fetch_assoc( $query_run);
                $_SESSION['user_id'] = $user_id;
                header('Location: index.php');            
            }
        }else{

        }
    }else{
        echo 'enter username and password';   
    }

}

?>
<form action="<?php echo $current_file; ?>" method="POST">
    Username: <input type="text" name="username" >
    Password: <input type="password" name="pass" >
    <input type="submit" name="submit" value="submit">
</form>

