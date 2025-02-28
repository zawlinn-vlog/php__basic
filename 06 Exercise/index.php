<?php

session_start();






if(!isset($_SESSION['username'])){
   
    header("location: ./login.php");
    echo "session have.";
}else{
    $username=  $_SESSION['username'];
}

    

    include_once "./assets/modules/header.php";

?>

<h3 class="text-primary"> Welcome Back, <?php echo strtoupper($username) ?></h3>

<a href="logout.php">Log out</a>

<?php
    include_once "./assets/modules/footer.php";
?>