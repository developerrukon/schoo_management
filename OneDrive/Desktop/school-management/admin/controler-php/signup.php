<?php
require "db_con.php";
$error = [];
//submit input
if(isset($_POST['submit'])){
    $dbName = trim(htmlentities($_POST['name']));
    $dbEmail = trim(htmlentities($_POST['email']));
    $dbUsername = trim(htmlentities($_POST['username']));
    $dbPassword = trim(htmlentities($_POST['password']));
    $encTypePwd = md5($dbPassword);
    $dbphoto = $_FILES['photo'];
// photo validation 
    $imgType = ['jpg','jpeg','png'];
    $imgEx = explode(".", $dbphoto['name']);
    if(empty($dbphoto['name'])){
        $error ['photoErr'] = "<p class='text-danger'>uplode you photo.!</p>";
    }elseif(!in_array(end($imgEx),$imgType)){
        $error ['photoErr'] = "<p class='text-danger'>uplode valid photo.!</p>";
    }elseif($dbphoto['size'] > 1000000){
        $error ['photoErr'] = "<p class='text-danger'>Max file 1mb.!</p>";
    }
// name validation
    if(empty($dbName)){
        $error ['nameErr'] = "<p class='text-danger'>enter you name.!</p>";
    }elseif(strlen($dbName) > 20){
        $error ['nameErr'] = "<p class='text-danger'>name max 20 character!</p>";
    }
// email validatin
    if(empty($dbEmail)){
        $error ['emailErr'] = "<p class='text-danger'>enter you email.!</p>";
    }elseif(!filter_var($dbEmail,FILTER_VALIDATE_EMAIL)){
        $error ['emailErr']  = "<p class='text-danger'>enter valid email.!</p>";
    }
//username validation
    if(empty($dbUsername)){
        $error ['usernameErr'] = "<p class='text-danger'>enter you username.!</p>";
    }elseif(!preg_match("/^[a-zA-Z][0-9a-zA-Z_!$@#^&]{5,20}$/", $dbUsername)){
        $error ['usernameErr'] = "<p class='text-danger'>valid username, alphanumeric & longer than or equals 5 chars.!</p>";
    }
// password validation
    if(empty($dbPassword)){
        $error ['passwordErr'] = "<p class='text-danger'>enter you password.!</p>";
    }elseif(!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $dbPassword)){
        $error ['passwordErr']  = "<p class='text-danger'>Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.!</p>";
    }
// query seaction start
    if(empty($error)){
        $emailCheck = "SELECT email FROM users WHERE email = '$dbEmail' ";
        $resultEmail = mysqli_query($connect,$emailCheck);
        if(mysqli_num_rows($resultEmail) == 0){
            $usernameCheck = "SELECT username FROM users WHERE username = '$dbUsername' ";
            $resultUsename = mysqli_query($connect,$usernameCheck);
            if(mysqli_num_rows($resultUsename) == 0){
                $photo_name = uniqid().".".end($imgEx);
                $uplode = move_uploaded_file($dbphoto["tmp_name"], "uplode/profile/". $photo_name);
                if($uplode){
                    $query = "INSERT INTO users(name, email, username, password, photo) VALUES ('$dbName','$dbEmail','$dbUsername','$encTypePwd','$photo_name')";
                    $result = mysqli_query($connect,$query);
                    if($result){
                        $_SESSION['success'] = "<h5 class='text-success'>Registation Successfull!</h5>";
                        header("location:loginView.php");
                    }else{
                    $error ['emailErr']  = "<p class='text-danger'>Info problem.!</p>";
                    }
                }
            }else{
                echo "asc";
            }
        }else{
            $error ['emailErr']  = "<p class='text-danger'>allready email executed acount.!</p>";
        }

    }
}
