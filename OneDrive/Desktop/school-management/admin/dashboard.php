<h1 class="text-primary"><i class="fa fa-dashboard"></i>Dashboard <small class="text-dark">Statistics Overview</small></h2>
    <ol class="breadcrumb bg-light">
        <li class="breadcrumb-item py-3 px-3 active" aria-current="page"><i class="fa fa-dashboard"></i> Home</li>
    </ol>
    <?php
    require_once "db_con.php";
    $student_all =  mysqli_num_rows(mysqli_query($connect, "SELECT * FROM students_info"));
    require_once "controler-php/select_all_users.php";

    ?>
    <div class="row">
        <div class="col-sm-4">
            <a href="index.php?page=all_students_view">
                <div class="col bg-primary opacity-90 rounded-top my-3">
                    <div class="row px-4 pt-3">
                        <div class="col-sm-4">
                            <i class="fa-solid fa-users display-1 text-light"></i>
                        </div>
                        <div class="col-sm-8 text-light text-end">
                            <h1><?= $student_all ?></h1>
                            <p>All Students</p>
                        </div>
                    </div>
                    <div class="col bg-light border border-2 border-primary rounded-bottom">
                        <div class="row pt-2 px-3">
                            <div class="col-sm-6">
                                <p>View All Student</p>
                            </div>
                            <div class="col-sm-6 text-end">
                                <i class="fa-solid fa-circle-arrow-right text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="index.php?page=all_users_view">
                <div class="col bg-primary opacity-90 rounded-top my-3">
                    <div class="row px-4 pt-3">
                        <div class="col-sm-4">
                            <i class="fa-solid fa-users display-1 text-light"></i>
                        </div>
                        <div class="col-sm-8 text-light text-end">
                            <h1><?= $user_all ?></h1>
                            <p>All Users</p>
                        </div>
                    </div>
                    <div class="col bg-light border border-2 border-primary rounded-bottom">
                        <div class="row pt-2 px-3">
                            <div class="col-sm-6">
                                <p>View All Student</p>
                            </div>
                            <div class="col-sm-6 text-end">
                                <i class="fa-solid fa-circle-arrow-right text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <hr />

    <?php
    require_once "all_students_view.php";

    ?>