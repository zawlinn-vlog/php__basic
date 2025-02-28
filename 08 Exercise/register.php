<?php

include_once ("./assets/modules/header.php");

include_once "./assets/modules/navbar.php";

define('DB_HOST', 'localhost'); # DATABASE SERVER ADDRESS OR DOMAIN
define('DB_USER', 'root'); # DATABASE ADMIN USER
define('DB_PASS', ''); # DATABASE PASSWORD
define('DB_NAME', 'ohnmar'); # DATABASE NAME NOT TABLE NAME


$qry = "SELECT * FROM members";


function dbConnect(){

    $db = mysqli_connect(DB_HOST,DB_USER, DB_PASS, DB_NAME);



    if(mysqli_connect_errno() > 0){

        die("Connection Fail!");

    }else  {
        
        return $db;
    }   

}




function errorChecking($err){
    echo "<pre>". print_r($err, true) . "</pre>";
}


dbConnect();




function passGen($password){
  
  $pass = MD5($password);
  $pass = SHA1($pass);
  $pass = crypt($pass, $pass);

  return $pass;
}





if(isset($_REQUEST['rsubmit'])){

  $fullname = $_REQUEST['fullname'];
  $username = $_REQUEST['username'];
  $email = $_REQUEST['email'];
  $password = passGen($_REQUEST['password']);

  $connection = dbConnect();

 if(!mysqli_connect_errno() > 0){
  $result = mysqli_query($connection, "insert into members (fullname, username, email, password) value ('$fullname', '$username','$email', '$password')");  

  header('location: login.php');
 }


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
              class="form-control"
              
            />
          </div>

          <div class="form-group">
            <label for="username" class="form-label">Username</label>
            <input
              type="text"
              name="username"
              id="username"
              class="form-control"
              
            />
          </div>

          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="form-control"
              
            />
          </div>

          <div class="form-group">
            <label for="pass" class="form-label">Password</label
            ><input
              type="password"
              name="password"
              id="pass"
              class="form-control"
              
            />
          </div>

          <div class="form-group">
            <label for="cpass" class="form-label">Comfirmed Password</label
            ><input
              type="password"
              name="cpass"
              id="cpass"
              class="form-control"
              
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
          <p class="text-secondary text-center mb-2">Register with &mdash;</p>

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