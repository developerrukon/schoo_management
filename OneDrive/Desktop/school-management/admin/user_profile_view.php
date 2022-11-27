<?php

require_once "controler-php/user.php";
require_once "controler-php/user_profile.php";
?>

<h3 class="text-primary"><i class="fa fa-user"></i>My Profile</h3>
<ol class="breadcrumb bg-light">
  <li class="breadcrumb-item py-3 px-3 active" aria-current="page"><i class="fa fa-dashboard"></i> Dashboard/ <i class="fa fa-user"></i> profile</li>
</ol>
<div class="row">
  <div class="col-sm-8">
    <form method="POST">
      <table class="table table-bordered bg-light">
        <tbody>
          <tr>
            <td>User Id:</td>
            <td><?= $user['id'] ?></td>
          </tr>
          <tr>
            <td>Name:</td>
            <td><?= $user['name'] ?></td>
          </tr>
          <tr>
            <td>Username:</td>
            <td><?= $user['username'] ?></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><?= $user['email'] ?></td>
          </tr>
          <tr>
            <td>Status:</td>
            <td><?= $user['status'] ?></td>
          </tr>
          <tr>
            <td>SignUp Date:</td>
            <td><?= $user['sign_date'] ?></td>
          </tr>

        </tbody>
      </table>
      <div class="text-end">
        <a href="index.php?page=update_user_info" type="button" name="submit" class="btn btn-outline-dark">Edit Profile</a>
      </div>
    </form>
  </div>
  <div class="col-sm-4">
    <form action="" enctype="multipart/form-data" method="POST">
      <img src="uplode/profile/<?= $user['photo'] ?>" width="180" class="img-thumbnail rounded mx-auto d-block" />
      <label class="mb-0 mt-2">Photo</label>
      <input type="file" name="photo" class="form-control">
      <?php
      if (isset($error["photoErr"])) {
        echo $error["photoErr"];
      }
      ?>
      <button type="submit" name="upload" class="btn btn-outline-dark my-2">Upload</button>
    </form>
  </div>
</div>