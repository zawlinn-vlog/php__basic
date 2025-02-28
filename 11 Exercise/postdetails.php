<?php

require_once "./assets/system/config.php";

include_once "./assets/modules/head.php";
include_once "./assets/modules/navbar.php";
include_once "./assets/modules/header.php";

// echo $_SESSION['role'];

if(!isset($_SESSION['role'])) header('location: index.php');

$row; 


if(isset($_REQUEST['pid'])){

    $db = dbconnect();
    $pid = $_REQUEST['pid'];

    $qry = "SELECT * FROM posts WHERE id=$pid";


    $res = mysqli_query($db, $qry);

    $row = mysqli_fetch_assoc($res);

    // errchk($row);
}

?>


<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-8 mx-auto ">
            <div class="card ">
                <div class="card-header bg-white">
                    <div class="d-flex justify-content-between align-items-center">
                        
                        <span class="text-muted" style="font-size: 12px"><?php echo "Created Date - ". $row['cdate'] ?></span>

                        <span class="text-primary" style="font-size: 12px"> <?php echo  $row['createdby'] == 1? "Created by - Administrator" : "Created by - Member"; ?></span>
                    </div>
                </div>

                <div class="card-body">
                    <img src="<?php echo $row['picture'] ?>" alt="" class="img-fluid rounded" style="height: 350px;width: 100%; object-fit: cover">

                    <div class="card-text my-5 ms-4" >
                        <?php echo "<pre style='white-space: pre-wrap;'>" . $row['content'] . "</pre>" ?>
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <a href="index.php" class="btn btn-primary py-2 px-4 " style="font-size: 15px">Back to Home</a>
                    <a href="editpost.php?pid=<?php echo $row['id'] ?>" class="btn btn-primary py-2 px-4 " style="font-size: 15px">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>



<?php

include_once ("./assets/modules/footer.php");
?>