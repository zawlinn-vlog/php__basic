<?php


include_once ("./assets/modules/header.php");

include_once "./assets/modules/navbar.php";


if(isset($_SESSION['email'])){
  header("location: index.php");
}


define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'ohnmar');

$email = '';
$pass = '';


/* DB CONNETION */

function dbConnect(){
  $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

  if(mysqli_connect_errno() > 0){
    die('Connection Fail!');
  }
  else{
    // errCheck($db);
    // echo "Connect Success!";
    return $db;
  }
}

/* ERROR CHECKING */

function errCheck($db){

  // print format 

  echo "<pre>". print_r($db, true) . "</pre>";

}

dbConnect();


function passGen($password){

  $pass = MD5($password);
  $pass = SHA1($pass);
  $pass = crypt($pass, $pass);

  return $pass;
}


if(isset($_REQUEST['lsubmit'])){

  $inputEmail = $_REQUEST['email'];
  $inputPass = passGen($_REQUEST['password']);

  $getData = getSingleData($inputEmail);

  var_dump( $getData);

  if($getData){
    foreach($getData as $member){
      $email = $member['email'];
      $pass = $member['password'];
    }
  
    if($email == $inputEmail && $pass == $inputPass){
  
      $_SESSION['email'] = $email; 
      $_SESSION['password'] = $pass;
  
      header("location: ./index.php");
    }
  }
 

}


function getSingleData($email){

  $db = dbConnect();
  $qry = "SELECT email, password from members where email='$email'";
  $result = mysqli_query($db, $qry);

  // echo mysqli_num_rows($result);

  if(mysqli_num_rows($result) > 0){

    // errCheck($result);

    return $result;

    // foreach($result as $item){
    //   $email = $item['email'] ;
    //   $pass =  $item['password'];
    // }
  }


  
}


// getSingleData('zawlinn.profile@gmail.com');









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
              name="password"
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
          <a href="register.php" class="ms-2"> Register Here</a>

        </div>

        
      </div>
</div>


<?php

include_once "./assets/modules/footer.php";

?>