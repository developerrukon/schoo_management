<?php
require_once "hr_fr/header.php";
require_once "controler-php/login.php";


?>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="../images/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 bg-light py-5 px-4 rounded">
        <?php
          if(isset($_SESSION['success'])){
            echo $_SESSION['success'];
          }
        ?>
        <form method="POST">
          <!-- Email input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form1Example13">Email address</label>
            <input name="email" type="email" id="form1Example13" placeholder="enter you email" class="form-control form-control-lg" value="<?php if(isset($dbEmail)) echo $dbEmail; ?>"  />
            <?php
                if(isset($error['emailErr'])){
                    echo $error['emailErr'];
                }

            ?>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form1Example23">Password</label>
            <input name="password" type="password" placeholder="enter you password" id="form1Example23" class="form-control form-control-lg" value="<?php if(isset($dbPassword)) echo $dbPassword; ?>" />
            <?php
                if(isset($error['passwordErr'])){
                    echo $error['passwordErr'];
                }

            ?>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>

          <!-- Submit button -->
          <button name="submit" type="submit" class="btn btn-primary btn-lg btn-block">login</button>

          <div class="divider d-flex align-items-center my-4">
          <p>Don't have an account? <a href="signupView.php" class="link-info">Register here</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
<?php
require_once "hr_fr/footer.php";
unset($_SESSION['success']);
?>