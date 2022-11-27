<?php
session_start();
require_once "controler-php/user.php";
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>School Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="../css/all.min.css" rel="stylesheet">
  <link href="../css/all.min.css" rel="stylesheet">
  <link href="../css/fonts/all.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container my-2">
      <a class="navbar-brand" href="index.php">Navbar</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0  d-flex align-items-center">
          <?php
          if (!isset($_SESSION['user'])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="signupView.php">SignUp</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loginView.php"><i class="fa-solid fa-lock"></i>LogIn</a>
            </li>
          <?php
          }
          ?>
          <?php
          if (isset($_SESSION['user'])) { ?>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="signupView.php"><i class="fa-solid fa-users"></i>Add Users</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                <span><?= $user['name']  ?></span>
                <img src="uplode/profile/<?= $user['photo'] ?>" width="30px" class="rounded-circle" />
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php?page=user_profile_view"><i class="fa-solid fa-user"></i>Profile</a></li>
                <li><a class="dropdown-item" href="controler-php/logout.php"><i class="fa-solid fa-lock-open"></i>Logout</a></li>
              </ul>
            </li>
        </ul>

      <?php
          }
      ?>

      </div>
    </div>
  </nav>

  <?php
  unset($_SESSION['user_info']);
  ?>