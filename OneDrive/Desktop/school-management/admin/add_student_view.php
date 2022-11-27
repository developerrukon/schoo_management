<?php
    require_once "controler-php/add_student.php";
?>

<h1 class="text-primary"><i class="fa fa-user-plus"></i>Add Student <small class="text-dark">Statistics Overview</small></h2>
    <ol class="breadcrumb bg-light">
        <li class="breadcrumb-item py-3 px-3 active" aria-current="page"><i class="fa fa-dashboard"></i> Home/ <i class="fa fa-user-plus"></i> Add Student</li>
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
            <input type="text"  class="form-control"  placeholder="enter you  name" name="name" value="<?php if(isset($dbName)) echo $dbName ?>">
            <?php
                if(isset($error["nameErr"]))
                echo $error["nameErr"];
            ?>
        </div>
        <div class="mb-3 mt-3">
            <label class="form-label">Class:</label>
            <select class="form-select" name="class" aria-label="select example" value="<?php if(isset($dbClass)) echo $dbClass ?>">
                <option selected>Select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
            </select>
            <?php
                if(isset($error["classErr"]))
                echo $error["classErr"];
            ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Student Roll:</label>
            <input type="number" min="1" max="6"  class="form-control"  placeholder="enter you roll" name="roll" value="<?php if(isset($dbRoll)) echo $dbRoll ?>">
            <?php
                if(isset($error["rollErr"]))
                echo $error["rollErr"];
            ?>
        </div>
        <div class="mb-3">
            <label class="form-label">City:</label>
            <input type="text" class="form-control"  placeholder="enter you city" name="city" value="<?php if(isset($dbCity)) echo $dbCity ?>">
            <?php
                if(isset($error["cityErr"]))
                echo $error["cityErr"];
            ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Contact:</label>
            <input type="tel"  class="form-control"  placeholder="01*****" name="p_contact" value="<?php if(isset($dbPhone)) echo $dbPhone ?>">
            <?php
                if(isset($error["phoneErr"]))
                echo $error["phoneErr"];
            ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Photo:</label>
            <input type="file" name="photo" class="form-control">
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
    