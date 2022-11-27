<div class="col-sm-6">
    <?php
    require_once "controler-php/select_all_students.php";
        if(isset($_SESSION['success'])){
            echo $_SESSION['success'];
        }
        unset($_SESSION['success']);
    ?>
    </div>

    <h5 class="text-primary"><i class="fa fa-users"></i>All Students</h5>

<table id="data" class="table table-light table-hover table-bordered ">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Roll</th>
                <th scope="col">Class</th>
                <th scope="col">Contact</th>
                <th scope="col">City</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($users)){
                    foreach($users as $user){?>
                <tr>
                        <td><?= $user['id'] ?></td>
                        <td>
                            <img src="uplode/profile/<?= $user['photo'] ?>" width="40" />
                        </td>
                        <td><?= ucwords($user['name']) ?></td>
                        <td><?= $user['roll'] ?></td>
                        <td><?= $user['class'] ?></td>
                        <td><?= $user['p_contact'] ?></td>
                        <td><?= ucwords($user['city']) ?></td>
                        <td>
                            <a href="edit_student_view.php?id=<?= $user['id'] ?>" class="btn btn-primary">Edit</a>
                            <a href="controler-php/delete_student.php?id=<?= $user['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                </tr>

            <?php
                    }
                }
            ?>
   
        </tbody>
    </table>
