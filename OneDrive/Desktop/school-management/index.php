
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>School Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="../css/fonts/all.min.css" rel="stylesheet">
  <link href="../css/fonts/all.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="admin/loginView.php" class="btn btn-primary">Login Admin</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>
<div class="container">
    <div class="mt-5">
        <h2 class="text-center">Welcome To Students Management System </h2>
       <div class="d-flex justify-content-center mt-4">
       <form method="POST" action="">
            <div class="card text-dark bg-light" style="width:300px">
                <div class="card-header text-center">Students Info</div>
                <div class="card-body">
                    <label  class="text-end">Choose Class:</label>
                    <select name="choose" id="choose" class="form-select" aria-label=".form-select-lg example">
                        <option value="">Select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                    </select>
                    <label for="roll" class="text-start mt-2">Roll:</label>
                    <input type="text" name="roll" class="form-control"/>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary mt-2"/>
                </div>
            </div>
        </form>
       </div>
    </div>
<?php
require_once "admin/db_con.php";


  if(isset($_POST['submit'])){

    $choose = $_POST['choose'];
    $roll = $_POST['roll'];
    $result = mysqli_query($connect,"SELECT * FROM students_info WHERE roll = '$roll' and class= '$choose' " );
 
    if(mysqli_num_rows($result) == 1){
      
      $student_data = mysqli_fetch_assoc($result);
      ?>

    <div class="row d-flex justify-content-center align-items-center mt-2">
    <div class="col col-md-9 col-lg-7 col-xl-5">
      <div class="card" style="border-radius: 15px;">
        <div class="card-body p-4">
          <div class="d-flex text-black">
            <div class="flex-shrink-0">
              <img src="admin/uplode/profile/<?= $student_data['photo'] ?>"
                alt="Generic placeholder image" class="img-fluid"
                style="width: 150px; border-radius: 10px;">
            </div>
            <div class="flex-grow-1 ms-3">
                <table class="table table-hover table-bordered">
                  <tbody>
                    <tr>
                      <td>Name:</td>
                      <td><?= $student_data['name'] ?></td>
                    </tr>
                    <tr>
                      <td>Roll:</td>
                      <td><?= $student_data['roll'] ?></td>
                    </tr>
                    <tr>
                      <td>Class:</td>
                      <td><?= $student_data['class'] ?></td>
                    </tr>
                    <tr>
                      <td>City:</td>
                      <td> <?= $student_data['city'] ?></td>
                    </tr>
                    <tr>
                      <td>Contact:</td>
                      <td><?= $student_data['p_contact'] ?></td>
                    </tr>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  }else{?>
  <script type="text/javascript">
    alert("Data Not Found");
  </script>
<?php
  }

  }
?>












</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>