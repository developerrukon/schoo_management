<div class="col-sm-6">
    <?php
    require_once "controler-php/select_all_users.php";
        if(isset($_SESSION['success'])){
            echo $_SESSION['success'];
        }
        unset($_SESSION['success']);
    ?>
    </div>

<h1 class="text-primary"><i class="fa fa-users"></i>All Users <small class="text-dark">Statistics Overview</small></h2>
    <ol class="breadcrumb bg-light">
        <li class="breadcrumb-item py-3 px-3 active" aria-current="page"><i class="fa fa-dashboard"></i> Home / <i class="fa fa-users"></i>All users</li>
    </ol>
<table id="data" class="table table-light table-hover table-bordered ">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
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
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['username']?></td>
                        <td><?= $user['email'] ?></td>
                        
                </tr>

            <?php
                    }
                }
            ?>
   
        </tbody>
    </table>
