<?php
require_once "hr_fr/header.php";
if (!isset($_SESSION['user'])) {
    header("location:loginView.php");
}
if (!isset($_GET['page'])) {
    header("location:index.php?page=dashboard");
}
?>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-sm-3">
            <div class="list-group">
                <a href="index.php?page=dashboard" class="list-group-item list-group-item-action active" aria-current="true">
                    <i class="fa-solid fa-gauge"></i> Dashboard
                </a>
                <a href="index.php?page=add_student_view" class="list-group-item list-group-item-action"><i class="fa-solid fa-user-plus"></i> Add Student</a>
                <a href="index.php?page=all_students_view" class="list-group-item list-group-item-action"><i class="fa-solid fa-users"></i> All Students</a>
                <a href="index.php?page=all_users_view" class="list-group-item list-group-item-action"><i class="fa-solid fa-users"></i></i> All Users</a>

            </div>
        </div>
        <div class="col-sm-9 mt-4">
        <?php

           $page = $_GET['page'].'.php';
            include_once $page;
           
        ?>
        </div>
    </div>
</div>
</div>
<?php
require_once "hr_fr/footer.php";
?>