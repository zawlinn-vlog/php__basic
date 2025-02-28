<?php

session_start();


$email = "zawlinn.profile@gmail.com";
$pass = "Oxford@317";



$pass = crypt(SHA1(MD5($pass)), SHA1(MD5($pass), false));


if(isset($_REQUEST['lsubmit'])){

    $inputEmail = $_REQUEST['email'];
    $inputPass = $_REQUEST['pass'];


    $inputPass = crypt(SHA1(MD5($inputPass)), SHA1(MD5($inputPass), false));

   if($inputEmail == $email && $inputPass == $pass){
    $_SESSION['username'] = explode('.', $email)[0];
    $_SESSION['password'] = $pass;

    header("location: ./index.php");
   }


}

include_once "./assets/modules/header.php";

?>

<div class="main d-flex justify-content-center align-items-center">
      <div class="login-form rounded overflow-hidden">
        <!-- Form Header Section -->

        <div class="login-form__header d-flex justify-content-between">
          <div class="login-form__header-left">
            <h3 class="text-primary">Welcome Back!</h3>
            <p class="text-primary">Sign in to continue Stoke &mdash;</p>
          </div>
          <div class="login-form__header-right">
            <img
              src="./assets/img/login.png"
              alt=""
              class="login-form__header-img"
            />
          </div>
        </div>

        <!-- FORM INPUT SECTION -->

        <form
          class="login-form__container d-grid gap-4"
          action="<?php $_PHP_SELF ?>"
          method="post"
          enctype="multipart/form-data"
        >
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="form-control"
              required
            />
          </div>

          <div class="form-group">
            <label for="pass" class="form-label">Password</label
            ><input
              type="password"
              name="pass"
              id="pass"
              class="form-control"
              required
            />
          </div>

          <div class="form-check">
            <input
              type="checkbox"
              name="remember"
              class="form-check-input"
              id="remember"
              checked
            />
            <label for="remember" class="form-check-label text-secondary"
              >Remember me</label
            >
          </div>

          <div class="d-grid mt-2">
            <button
              class="btn btn-primary lbtn py-2"
              name="lsubmit"
              type="submit"
            >
              login
            </button>
          </div>
        </form>

        <!-- CONNECT WITH SOCIAL -->
        <div class="social mt-3">
          <p class="text-secondary text-center mb-2">Sign in with &mdash;</p>

          <div class="social-icon d-flex gap-3 justify-content-center">
            <a href="#" class="social-link">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="social-link social-google">
              <i class="fab fa-google"></i>
            </a>
          </div>
        </div>

        <!-- Forget Password -->
        <div class="forget text-center mt-4">
          <a href="#" class="forget-pass text-secondary">
            <i class="far fa-lock-alt"></i>
            Forget your password?
          </a>
        </div>

        
      </div>
</div>





<?php
include_once ("./assets/modules/footer.php")
?>