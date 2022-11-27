<?php
require_once "db_con.php";
$query = "SELECT * FROM students_info";
$result = mysqli_query($connect,$query);
if($student_all =  mysqli_num_rows($result) > 0 ){
    $users = mysqli_fetch_all($result, true);
}