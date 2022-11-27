<?php
require_once "hr_fr/header.php";
require_once "controler-php/edit_student.php";
if (!isset($_SESSION['user'])) {
    header("location:loginView.php");
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
        <h1 class="text-primary"><i class="fa-solid fa-pen"></i>Update Student <small class="text-dark">Statistics Overview</small></h2>
    <ol class="breadcrumb bg-light">
        <li class="breadcrumb-item py-3 px-3 active" aria-current="page"><i class="fa fa-dashboard"></i> Home/ <i class="fa fa-user-plus"></i> Add Student / <i class="fa-solid fa-pen"></i>Edit</li>
    </ol>

<div class="row">
    <div class="col-sm-7">
    <?php
        if(isset($_SESSION['success'])){
            echo $_SESSION['success'];
        }
        unset($_SESSION['success']);
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3 mt-3">
            <label class="form-label">Name:</label>
            <input type="text"  class="form-control"  placeholder="enter you  name" name="name" value="<?= $user['name']?>">
            <?php
                if(isset($error["nameErr"]))
                echo $error["nameErr"];
            ?>
        </div>
        <div class="mb-3 mt-3">
            <label class="form-label">Class:</label>
            <select class="form-select" name="class" aria-label="select example">
                <option value="">Select</option>
                <option <?= $user['class'] == 1 ? "selected='' " : ""; ?> value="1">One</option>
                <option <?= $user['class'] == 2 ? "selected='' " : ""; ?> value="2">Two</option>
                <option <?= $user['class'] == 3 ? "selected='' " : ""; ?> value="3">Three</option>
                <option <?= $user['class'] == 4 ? "selected='' " : ""; ?> value="4">Four</option>
                <option <?= $user['class'] == 5 ? "selected='' " : ""; ?> value="5">Five</option>
            </select>
            <?php
                if(isset($error["classErr"]))
                echo $error["classErr"];
            ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Student Roll:</label>
            <input type="number" min="1" max="6"  class="form-control"  placeholder="enter you roll" name="roll" value="<?= $user['roll']?>">
            <?php
                if(isset($error["rollErr"]))
                echo $error["rollErr"];
            ?>
        </div>
        <div class="mb-3">
            <label class="form-label">City:</label>
            <input type="text" class="form-control"  placeholder="enter you city" name="city" value="<?= $user['city']?>">
            <?php
                if(isset($error["cityErr"]))
                echo $error["cityErr"];
            ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Contact:</label>
            <input type="tel"  class="form-control"  placeholder="01*****" name="p_contact" value="<?= $user['p_contact']?>">
            <?php
                if(isset($error["phoneErr"]))
                echo $error["phoneErr"];
            ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Photo:</label>
            <input type="file" name="photo" class="form-control">
            <img src="uplode/profile/<?= $user['photo']?>" width="40">
            <?php
                if(isset($error["photoErr"])){
                    echo $error["photoErr"];
                }
            ?>
        </div>
       <div class="text-end">
        
       <button type="submit" name="submit" class="btn btn-primary">Add Student</button>
       </div>
    </form>

    </div>
</div>

        </div>
    </div>
</div>
</div>
<?php
require_once "hr_fr/footer.php";
?>

