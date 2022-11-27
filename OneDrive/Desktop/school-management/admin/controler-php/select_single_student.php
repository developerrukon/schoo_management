<?php
require_once "db_con.php";
$id = $_GET['id'];
$query = "SELECT * FROM students_info WHERE id=$id";
$result = mysqli_query($connect,$query);
if(mysqli_num_rows($result) > 0){
    $user = mysqli_fetch_assoc($result);
}