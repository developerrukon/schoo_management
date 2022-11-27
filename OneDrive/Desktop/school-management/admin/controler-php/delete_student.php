<?php
require_once "../db_con.php";
$id = $_GET['id'];
$del_photo_query = "SELECT photo FROM students_info WHERE id=$id";
$det_photo_result = mysqli_query($connect,$del_photo_query);
if(mysqli_num_rows($det_photo_result) > 0){
    $user = mysqli_fetch_assoc($det_photo_result);
    $img_path = "../uplode/profile/".$user['photo'];
    if(file_exists($img_path)){
        $del_photo_file = unlink($img_path);
        if($del_photo_file){
            $del_user = "DELETE FROM students_info WHERE id = $id";
            $del_result = mysqli_query($connect,$del_user);
        }
        header("location:../index.php?page=all_students_view");
    }
}



