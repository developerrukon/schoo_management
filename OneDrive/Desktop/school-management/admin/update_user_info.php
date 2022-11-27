<?php
  require_once "controler-php/user.php";
  require_once "controler-php/update_user.php";

?>

<h3 class="text-primary"><i class="fa fa-dashboard"></i>Update Profile</h3>
<ol class="breadcrumb bg-light">
  <li class="breadcrumb-item py-3 px-3 active" aria-current="page"><i class="fa fa-dashboard"></i> Dashboard/ <i class="fa fa-user"></i> profile / <i class="fa fa-pencil"></i> Update</li>
</ol>
<div class="row">
  <div class="col-sm-8">
    <form method="POST">
      <table class="table table-bordered bg-light">
        <tbody>
          <tr>
            <td>Name:</td>
            <td>
            <input type="text" name="name" class="form-control" value="<?= $user['name'] ?>"/>
          <?php
            if(isset($error ['nameErr'])){
              echo $error ['nameErr'];
            }
          ?>
          </td>
          </tr>
          <tr>
            <td>Username:</td>
            <td>
            <input type="text" name="username" class="form-control" value="<?= $user['username'] ?>"/>
            <?php
            if(isset($error ['usernameErr'])){
              echo $error ['usernameErr'];
            }
          ?>
          </td>
          </tr>
          
          <tr>
            <td>Email:</td>
            <td>
            <input type="text" name="email" class="form-control" value="<?= $user['email'] ?>"/>
            <?php
            if(isset($error ['emailErr'])){
              echo $error ['emailErr'];
            }
          ?>
          </td>
          </tr>
          
          
        </tbody>
      </table>
      <div class="text-end">

        <a href="index.php?page=user_profile_view" class="btn btn-outline-dark">Cancel</a>
        <button type="submit" name="submit" class="btn btn-outline-dark">Update</button>
      </div>
    </form>
  </div>

</div>