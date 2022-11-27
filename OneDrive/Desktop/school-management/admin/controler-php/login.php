<?php
require_once "db_con.php";
$error = [];
if(isset($_POST['submit'])){
    $dbEmail = trim(htmlentities($_POST['email']));
    $dbPassword = trim(htmlentities($_POST['password']));
    $encTypePwd = md5($dbPassword);

    if(empty($dbEmail)){
        $error ['emailErr'] = "<p class='text-danger'>enter you email.!</p>";
    }elseif(!filter_var($dbEmail,FILTER_VALIDATE_EMAIL)){
        $error ['emailErr']  = "<p class='text-danger'>enter valid email.!</p>";
    }
    if(empty($dbPassword)){
        $error ['passwordErr'] = "<p class='text-danger'>enter you password.!</p>";
    }elseif(!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $dbPassword)){
        $error ['passwordErr']  = "<p class='text-danger'>Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.!</p>";
    }
    if(empty($error)){
        $query = "SELECT * FROM users WHERE email = '$dbEmail'";
        $result = mysqli_query($connect,$query);
        if(mysqli_num_rows($result) > 0){
           $user = mysqli_fetch_assoc($result);
           if($user['password'] == $encTypePwd){
            unset($user['password']);
            $_SESSION['user'] = $user;
            setcookie('loginUser',$user['name'],time()+10,'/');
            header("location:index.php");
           }else{
            $error ['passwordErr']  = "<p class='text-danger'>password is wrong!</p>";
           }
        }else{
            $error ['emailErr']  = "<p class='text-danger'>email not found.!</p>";
        }

    }
}
