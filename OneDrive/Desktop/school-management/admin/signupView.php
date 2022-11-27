<?php
require_once "hr_fr/header.php";
require_once "controler-php/signup.php";
?>
<section class="vh-180 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="POST" enctype="multipart/form-data">

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Your Name</label>
                  <input type="text" name="name" placeholder="enter you name" id="form3Example1cg" class="form-control form-control-lg" value="<?php if(isset($dbName)) echo $dbName; ?>" />
                  <?php
                    if(isset($error['nameErr']))
                    echo $error['nameErr'];
                  ?>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input type="email" name="email" placeholder="enter you email" id="form3Example3cg" class="form-control form-control-lg" value="<?php if(isset($dbEmail)) echo $dbEmail; ?>" />
                  <?php
                    if(isset($error['emailErr']))
                    echo $error['emailErr'];
                  ?>
                </div>
                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Username</label>
                  <input type="text" name="username" placeholder="enter you username" id="form3Example3cg" class="form-control form-control-lg" value="<?php if(isset($dbUsername)) echo $dbUsername; ?>" />
                  <?php
                    if(isset($error['usernameErr']))
                    echo $error['usernameErr'];
                  ?>
                </div>
                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" name="password" placeholder="password" id="form3Example4cg" class="form-control form-control-lg" value="<?php if(isset($dbPassword)) echo $dbPassword; ?>" />
                  <?php
                    if(isset($error['passwordErr']))
                    echo $error['passwordErr'];
                  ?>
                </div>
                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Photo</label>
                  <input type="file" name="photo" id="form3Example3cg" class="form-control form-control-lg" value="<?php if(isset($dbphoto['name'])) echo $dbphoto['name']; ?>" >
                  <?php
                    if(isset($error['photoErr']))
                    echo $error['photoErr'];
                  ?>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="summit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="loginView.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
require_once "hr_fr/footer.php";
?>