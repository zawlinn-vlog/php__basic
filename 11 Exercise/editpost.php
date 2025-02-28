<?php

require_once "./assets/system/config.php";

// echo $_SESSION['username'], $_SESSION['role'];

if(!isset($_SESSION['role'])) header("location: index.php");

date_default_timezone_set('Asia/Bangkok');

$row; $oldpath; $usertype; $userrole; $userid;

if(isset($_REQUEST['pid'])){

    $pid = $_REQUEST['pid'];

    $db = dbconnect();

    $qry = "SELECT * FROM posts WHERE id=$pid";

    $res = mysqli_query($db, $qry);

    $row = mysqli_fetch_assoc($res);

    $oldpath = $row['picture'];

    $posttype = $row['posttype'];

    // $userrole = $row['userrole'];

    // $createdby = $row['createdby'];
}


// errchk($db);

if(isset($_REQUEST['upost'])){

  $path;

    $title = $_REQUEST['ptitle'];

    $content = $_REQUEST['pcontent'];

    $type = $_REQUEST['ptype'];

    // $role = $_SESSION['usertype'];

    // $userid = $_SESSION['userid'];

    $getDate = date('Y-m-d h:i:s', time());

    $file = $_FILES['pfile'];

    $tmp = $file['tmp_name'];

    // errchk($file);

    // echo $tmp;

    if($tmp) {

      $ext = explode('.', $file['name'])[1];
    
      $img = "IMG-".mt_rand(100000, 1000000).".".$ext;
      
      $path = "./assets/upload/$img";

    }else{

      $path = $oldpath;

    }
    
    // echo $img;

    // echo $title . "<br/>", $content . "<br/>", $type . "<br/>",$role . "<br/>", $userid . "<br/>", $getDate . "<br/>", $path;



    // errchk($db);
    $db = dbconnect();

    // errchk($db);

    // $qry = 'INSERT INTO posts (title, picture, content, posttype, userrole, createdby, cdate, udate) VALUE ("'$title'", "'$path'", "'$content'", "'$type'", "'$role'", "'$userid'", "'$getDate'", "'$getDate'")';

    $qry = "UPDATE posts SET title='$title', picture='$path', content='$content', posttype='$type', udate='$getDate' WHERE id=$pid";

    // echo $qry;

    
    if(!mysqli_connect_errno()){
      
      $res = mysqli_query($db, $qry);

      if($tmp) move_uploaded_file($tmp, $path);
      
      echo alertMsg('Post was Update Successfully!', 'index.php');
    }

    else echo alertMsg('Post cannot Update', 'createpost.php');

    mysqli_close($db);

}




include_once "./assets/modules/head.php";
include_once "./assets/modules/navbar.php";
include_once "./assets/modules/header.php";

?>


<div class="main mt-5 d-flex justify-content-center">
      <div class="login-form rounded overflow-hidden">
        <!-- Form Header Section -->

        <div class="login-form__header d-flex justify-content-between">
          <div class="login-form__header-left">
            <h3 class="text-primary">Welcome Back!</h3>
            <p class="text-primary">Edit Your Post  &mdash;</p>
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
        <input type="hidden" id="posttype" name="" value="<?php echo $posttype ?>">
          <div class="form-group">
            <label for="ptitle" class="form-label">Post Title</label>
            <input
              type="text"
              name="ptitle"
              id="ptitle"
              class="form-control invalid"
              value="<?php echo $row['title'] ?>"
              required
            />
            <span class="invalid-txt text-danger">Fill your Post Title</span>
          </div>

          <div class="form-group">
            <label for="file" class="form-label">Upload Picture</label>
            <input
              type="file"
              name="pfile"
              id="file"
              class="form-control "
              
            />
            <span class="invalid-txt text-danger">Upload only Picture</span>
          </div>

          <div class="form-group">
            <label for="pcontent" class="form-label">Post Contents</label>
            <textarea name="pcontent" id="pcontent" class="form-control" style="height: 200px; resize: none" ><?php echo $row['content']  ?></textarea>
            
            <span class="invalid-txt text-danger">Write Post content</span>
          </div>

        


          <div class="">
            <label for="type" class="form-label">Content Type</label>
            <select class="form-select form-select-lg mb-3 text-muted" 
            name="ptype" style="font-size: 1.5rem" id="selectpost">
              <option selected>Choose user type</option>
              <option value="1" selected>Politics News</option>
              <option value="2">IT News</option>
              <option value="3">Wars News</option>
              <option value="4">Blog Posts</option>
              
            </select>
          </div>

          

          <div class="d-grid mt-2">
            <button
              class="btn btn-primary lbtn py-2"
              name="upost"
              type="submit"
            >
              Create Post
            </button>
          </div>
        </form>
       
      </div>
</div>


<?php
include_once "./assets/modules/footer.php";
?>