<?php
require_once "db_con.php";
$query = "SELECT * FROM users";
$result = mysqli_query($connect,$query);
if($user_all = mysqli_num_rows($result)){
    $users = mysqli_fetch_all($result, true);
}