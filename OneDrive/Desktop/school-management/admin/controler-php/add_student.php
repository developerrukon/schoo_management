<?php
require "db_con.php";
$error = [];
if(isset($_POST["submit"])){
  $dbName = trim(htmlentities($_POST['name']));
  $dbRoll = trim(htmlentities($_POST['roll']));
  $dbCity = trim(htmlentities($_POST['city']));
  $dbClass = trim(htmlentities($_POST['class']));
  $dbPhone = trim(htmlentities($_POST['p_contact']));
  $dbPhoto = $_FILES['photo'];
//image validation
    $photoType = ["jpg", "png", "jpeg", "gif"];
    $photoEx = explode(".", $dbPhoto["name"]);
    if(empty($dbPhoto["name"])){
      $error["photoErr"] = "<div class='text-danger'>Uplode you photo!</div>";
    }elseif(!in_array(end($photoEx),$photoType)){
      $error["photoErr"] = "<div class='text-danger'>Please! Uplode you jpg, png, jpeg or git photo!</div>";
    }elseif($dbPhoto["size"] > 1000000){
      $error["photoErr"] = "<div class='text-danger'>Please! Uplode photo max 1 MB</div>";
    }
//name validation
    if(empty($dbName)){
      $error["nameErr"] = "<div class='text-danger'>enter you name!</div>";
    }elseif(strlen($dbName) > 30){
      $error["nameErr"] = "<div class='text-danger'>name max character 30!</div>";
    }
//roll validation
    if(empty($dbRoll)){
      $error["rollErr"] = "<div class='text-danger'>enter you roll!</div>";
    }elseif(strlen($dbRoll) > 6){
      $error["rollErr"] = "<div class='text-danger'>roll max character 6!</div>";
    }
//city validation
    if(empty($dbCity)){
      $error["cityErr"] = "<div class='text-danger'>enter you city!</div>";
    }elseif(strlen($dbCity) > 50){
      $error["cityErr"] = "<div class='text-danger'> city max character 50!</div>";
    }
//class validation
    if(empty($dbCity)){
      $error["classErr"] = "<div class='text-danger'>select  you class!</div>";
    }
//phone number validation
    if(empty($dbPhone)){
      $error["phoneErr"] = "<div class='text-danger'>enter you phone number!</div>";
    }elseif(strlen($dbPhone) > 11){
      $error["phoneErr"] = "<div class='text-danger'>phone number max character 11!</div>";
    }
    elseif(preg_match("/(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/", $dbPhone) == false){
      $error["phoneErr"] = "<div class='text-danger'>phone number not valid!</div>";
    }
//  uplode information
    if(empty($error)){
      $photo_name = uniqid().".".end($photoEx);
      $uplode = move_uploaded_file($dbPhoto["tmp_name"], "uplode/profile/". $photo_name);

    if($uplode){

      $query = "INSERT INTO students_info(name, roll, class, city, p_contact, photo) VALUES ('$dbName','$dbRoll','$dbClass','$dbCity','$dbPhone','$photo_name')" ;

      $result = mysqli_query($connect,$query);
      if($result){
        $_SESSION['success'] = "<h5 class='alert alert-success'>Student Add Successfull.!</h5>";
        header("location:index.php?page=dashboard");
      }else{
        $_SESSION['success'] = "<h5 class='alert alert-success'>Submit feil!</h5>";
        header("location:index.php?page=add_student_view");
      }
    }

  }


}
