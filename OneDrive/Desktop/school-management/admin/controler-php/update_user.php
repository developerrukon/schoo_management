<?php
$error = [];
if(isset($_POST['submit'])){
    $dbName = trim(htmlentities($_POST['name']));
    $dbEmail = trim(htmlentities($_POST['email']));
    $dbUsername = trim(htmlentities($_POST['username']));
  
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

// query seaction start
    if(empty($error)){
       $query = "UPDATE users SET name='$dbName',email='$dbEmail',username='$dbUsername'  WHERE id = '$user_id' ";
       $result = mysqli_query($connect,$query);
       if($result){
       // header("location:index.php?page=user_profile_view");
       }
    }
}
