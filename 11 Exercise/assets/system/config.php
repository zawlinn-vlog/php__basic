<?php


require_once "./assets/system/connectdb.php";

// REATE MEMBER TABLE 

function createMembersTable(){

  $db = dbconnect();

  $qry = "CREATE TABLE IF NOT EXISTS members (id int not null auto_increment, fullname varchar(255) not null, username varchar(255) not null, usertype tinyint not null default 1, email varchar(255) not null, password varchar(255), PRIMARY KEY (id), UNIQUE (email))";

  if(mysqli_query($db, $qry)){
    alertBox( "Members table is created!");
  }else{
    alertBox("Members table is created to Fail!");
  }

  mysqli_close($db);
}


// CREATE POST TABLE

function createPostTable(){

  $db = dbconnect();

  $qry = "CREATE TABLE IF NOT EXISTS posts (id INT NOT NULL AUTO_INCREMENT, title varchar(255) NOT NULL, picture text NOT NULL, content text NOT NULL, posttype tinyint NOT NULL DEFAULT 1,userrole tinyint NOT NULL, createdby tinyint not null, cdate datetime NOT NULL , udate datetime NOT NULL, PRIMARY KEY (id))";

 $res = mysqli_query($db, $qry);

 if($res) alertBox("Posts Table is created!");
 else alertBox("Post Table does not create!");

 mysqli_close($db);

}


// CREATE ALERT BOX ELEMENT

function alertBox($msg){
  $doc = <<<START
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        $msg
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

  START;
  echo $doc;
}


// CREATE PASS GENERATOR

function passGen($pass){
    $password = MD5($pass);
    $password = SHA1($password);
    $password = crypt($password, $password);

    return $password;
}



// CREATE ALERT MEESSAGE 

function alertMsg($txt, $page="register.php"){

    $doc = <<<START
        <div class="modal-box" style="height: 100vh; width: 100%; position: fixed; top:0; left: 0; z-index: 10000; ">
              <div class="modal-drop h-100 d-flex justify-content-center align-items-center" style=" backdrop-filter: blur(5px) brightness(50%)">
                <div class="modal-container" style="width: 400px; background: #fff; padding: 3rem; border-radius: .5rem;">
                    <div class="modal-body">
                          "$txt"
                    </div>
                    <div class="modal-footer">
                      <a href="$page" class="btn btn-danger px-4 py-2" style="font-size: 1.5rem">Close</a>
                    </div>
                </div>
              </div>
            </div>
    START;

    return $doc;
}


// PULL OUT SINGLE DATA


function checkData($email){

  $db = dbconnect();

  $qryEmail = "SELECT * FROM members WHERE email='$email'";

  $res = mysqli_query($db, $qryEmail);

  mysqli_close($db);

  return $res;

}


function pullCategories($cat){
  $db = dbconnect();

  $utype = $_SESSION['usertype'];

  $qry ;

  if($utype == '1'){
    $qry = "SELECT * FROM posts WHERE posttype=$cat";
  }else{
      $qry =  "SELECT * FROM posts WHERE posttype=$cat AND userrole=$utype";
  }

  $res = mysqli_query($db, $qry);

  // errchk($res);

  if($res){

    while($row = mysqli_fetch_assoc($res)){

      echo  "
          <div class='col-6 col-lg-4 col-md-6 align-seft-normal'>
              <div class='card p-3 h-100'>
                <img src='".$row['picture']."' class='card-img-top' alt='' style='height: 14rem; object-fit: cover;'>
                <div class='card-body mt-3'>
                  <h3 class='card-title text-primary'>".$row['title']." &mdash;</h3>
                  <p class='card-text text-muted mt-3'>".substr($row['content'], 0, 400)."...</p>
                </div>
                <div class='d-flex justify-content-between align-items-end mt-4'>
                  <span class='date text-muted' style='font-size: 10px'>".$row['cdate']."</span>
                    <div class='button'> 
                      <a href='editpost.php?pid=".$row['id']."' class='text-link text-decoration-none me-3' >Edit</a>
                      <a href='postdetails.php?pid=".$row['id']."' class='text-link text-decoration-none'>Read More</a>
                    </div>
                </div>
              </div>
            </div>   
      ";

      
    }
  }
}



// ALTER TABLE table_name AUTO_INCREMENT = value;