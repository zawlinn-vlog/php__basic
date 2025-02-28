<?php

require_once "./assets/system/config.php";

include_once ("./assets/modules/head.php");

include_once "./assets/modules/navbar.php";

// CREATE TABLE FIRST 

createMembersTable();

//

if(!isset($_SESSION['usertype'])){
    if(isset($_REQUEST['rsubmit'])){


      $ranNum = mt_rand(100000, 1000000);
    
      // echo "submit is clicked";
    
      // GET DATA FROM REGISTER FORM
    
    
    
      $fullname = $_REQUEST['fullname'];
      $username = "userid-".$ranNum;
      $userytpe = $_REQUEST['usertype'];
      $email = $_REQUEST['email'];
      $pass = $_REQUEST['password'];
    
    
      $pass = passGen($pass);
    
      $db = dbconnect();
    
      // errchk($db);
      
      if(mysqli_connect_errno()) {
        
        return false;
        
      }
    
      $hasExists = checkData($email) ;
    
    
      if(mysqli_num_rows($hasExists)) {
        echo alertMsg('Your Email has already Exists!');
        
      }
    
    else{
      $qry = "INSERT INTO members (fullname, username, usertype, email, password) VALUE ('$fullname', '$username', $userytpe, '$email', '$pass')";
    
      $res = mysqli_query($db, $qry);
    
      // echo $res;
    
        if($res) echo alertMsg('Register Successful!', 'login.php');
        // else echo alertMsg('Register Failure!', 'register.php');
        }
        mysqli_close($db);
    }  
}else{
  header('location: index.php');
}

?>


<div class="main mt-5 d-flex justify-content-center">
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
            <label for="fullname" class="form-label">Fullname</label>
            <input
              type="text"
              name="fullname"
              id="fullname"
              class="form-control invalid"
              required
            />
            <span class="invalid-txt text-danger">Fill your Fullname</span>
          </div>

          <!-- <div class="form-group">
            <label for="username" class="form-label">Username</label>
            <input
              type="text"
              name="username"
              id="username"
              class="form-control invalid"
              required
            />
            <span class="invalid-txt text-danger">Please choose a username (' ', [A-Z] must not include )
            </span>
          </div> -->

          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="form-control invalid"
              required
            />
            <span class="invalid-txt text-danger">Please a valid Email Address</span>
          </div>

          <div class="form-group">
            <label for="pass" class="form-label">Password</label
            ><input
              type="password"
              name="password"
              id="password"
              class="form-control invalid"
              required
            />
            <span class="invalid-txt text-danger">Your password must be at least 6 words and more</span>
          </div>

          <div class="form-group">
            <label for="cpass" class="form-label">Comfirmed Password</label
            ><input
              type="password"
              name="cpass"
              id="cpass"
              class="form-control invalid"
              required
            />
            <span class="invalid-txt text-danger">Your password does not match</span>
          </div>


          <div class="">
            <label for="type" class="form-label">User Type</label>
            <select class="form-select form-select-lg mb-3 text-muted" 
            name="usertype" style="font-size: 1.5rem">
              <option selected>Choose user type</option>
              <option value="1" selected>Administartor</option>
              <option value="2">Member</option>
              
            </select>
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
              >I accept understand all of Agreement &mdash;</label
            >
          </div>

          <div class="d-grid mt-2">
            <button
              class="btn btn-primary lbtn py-2"
              name="rsubmit"
              type="submit"
            >
              Register
            </button>
          </div>
        </form>

        <!-- CONNECT WITH SOCIAL -->
        <div class="social mt-3">
          <p class="text-secondary text-center mb-2" data-bs-toggle="modal" data-bs-target="#myModal">Register with &mdash;</p>

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
          <span class="forget-pass text-secondary">
            Are you already Member?
          </span>
          <a href="login.php"> Login </a>
        </div>

        
      </div>
</div>

<?php


include_once "./assets/modules/footer.php";

?>


