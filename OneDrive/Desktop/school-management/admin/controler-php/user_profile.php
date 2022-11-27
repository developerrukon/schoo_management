<?php
$error = [];
if(isset($_POST['upload'])){
    $upload_photo = $_FILES['photo'];
    $db_photo_name = $_SESSION['user']['photo'];
    print_r($db_photo_name);
    $db_photo_id = $_SESSION['user']['id'];
 //   image validation
    $photoType = ["jpg", "png", "jpeg", "gif"];
    $photoEx = explode(".", $upload_photo["name"]);
    if(empty($upload_photo["name"])){
    $error["photoErr"] = "<div class='text-danger'>select you photo!</div>";
    }elseif(!in_array(end($photoEx),$photoType)){
    $error["photoErr"] = "<div class='text-danger'>Please! Uplode you jpg, png, jpeg or git photo!</div>";
    }elseif($upload_photo["size"] > 1000000){
    $error["photoErr"] = "<div class='text-danger'>Please! Uplode photo max 1 MB</div>";
    }else{
        $imgPath = "uplode/profile/".$db_photo_name;
        if(file_exists($imgPath)){
         unlink($imgPath);
        }
       }

       if(empty($error)){
        $photo_name = uniqid().".".end($photoEx);
        $upload = move_uploaded_file($upload_photo['tmp_name'],"uplode/profile/". $photo_name);
        if($upload){
            $query = "UPDATE users SET photo ='$photo_name' WHERE id= '$db_photo_id' ";
            $result = mysqli_query($connect,$query);
            if($result){
                header("location:index.php?page=user_profile_view");
            }
        }
    }
  
}


?>