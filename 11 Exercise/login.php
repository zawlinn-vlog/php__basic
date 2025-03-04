<?php

require_once "./assets/system/config.php";

include_once ("./assets/modules/head.php");

include_once "./assets/modules/navbar.php";

createPostTable();


if(!isset($_SESSION['usertype'])){

  $db = dbconnect();

  if(isset($_REQUEST['lsubmit'])){
    
    $email = $_REQUEST['email'];
    
    $pass = $_REQUEST['password'];

    $pass = passGen($pass);

    $res = checkData($email);

    // errchk($res);

    if(mysqli_num_rows($res)){

      $password = '';
      $usertype;
      $usernmae;

        while($row = mysqli_fetch_assoc($res)){

          $password = $row['password'];
          $usertype = $row['usertype'];
          $userid = $row['id'];

        }

        // echo $password;

        if($password == $pass) {
          
        switch($usertype){

          case 1:
            $_SESSION['role'] = "Administrator";
            break;

          case 2:
            $_SESSION['role'] = "Member";
            break;
        }


        $_SESSION['userid'] = $userid;
        $_SESSION['usertype'] = $usertype;

        header('location: index.php');

        }
        else alertBox('User does not Exist!');
    }

    
  }

}else{
  header("location: index.php");
}


?>


<div class="main mt-5 d-flex justify-content-center ">
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

        <!-- 
          was-validated

          invalid-txt
        -->

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
              class="form-control invalid"
              required
            />
            <span class="invalid-txt text-danger">your email must be email format</span>
          </div>

          <div class="form-group">
            <label for="password" class="form-label">Password</label
            ><input
              type="password"
              name="password"
              id="password"
              class="form-control invalid"
              required
            />
            <span class="invalid-txt text-danger">your password must have a special characters </span>

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
          <a href="register.php" class="ms-2"> Register Here</a>

        </div>

        
      </div>
</div>


<?php

include_once "./assets/modules/footer.php";

?>