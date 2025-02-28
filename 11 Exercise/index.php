<?php

require_once "./assets/system/config.php";



include_once "./assets/modules/head.php";
include_once "./assets/modules/navbar.php";
include_once ("./assets/modules/header.php");

// echo $_SESSION['role'], $_SESSION['usertype'], $_SESSION['username'];
?>



<div class="container mt-4 p-0">
    <div class="row w-100 g-0">
        <div class="col-3 d-none d-md-block pe-3">
           <?php include_once "./assets/modules/sidebar.php"  ?>
        </div>

        <div class="col-12 col-md-9 px-0 pb-5 " >
            <div class="row gy-4" >
                <?php

                    $db = dbconnect();

                    $start;

                    $count ; 

                    if(isset($_REQUEST['start'])){

                        $start = $_REQUEST['start'];
                    }
                    else{
                        $start = 0;
                    }

                    if(!mysqli_connect_errno()){

                       if(isset($_SESSION['usertype'])){

                        $utype = $_SESSION['usertype'];
                       
                        $cqry; $qry; $count;

                        if($utype == '1'){
                            $cqry =  "SELECT * FROM posts";
                            $qry =  "SELECT * FROM posts LIMIT $start, 6";

                        }else{
                            $cqry =  "SELECT * FROM posts WHERE userrole=$utype";
                            $qry =  "SELECT * FROM posts WHERE userrole=$utype LIMIT $start, 6";
                        }

                        
                        $cres = mysqli_query($db, $cqry);

                        $res = mysqli_query($db, $qry);

                        // echo $qry;

                        $count = mysqli_num_rows($cres);

                        // echo $count;

                            while($row = mysqli_fetch_assoc($res)){
                                // errchk($row);
                                echo "
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

                       


                ?>
            </div>

            <div class="d-flex justify-content-center mt-5">
                
                    <div class="page pagination">
                        <div class="pagination">
                            
                        <?php 

                            // echo $count;

                            if(isset($_SESSION['role'])){

                                $index = 1;

                                for($i = 0; $i < $count; $i += 6){

                                    echo '<span class="page-item">
                                                <a href="index.php?start='.$i.'" class="page-link" style="font-size: 16px">'.$index.'</a>
                                        </span>';
                                    $index++;
                                }
                            }
                        ?>
                        </div>
                    </div>
                
            </div>

           
        </div>
    </div>
</div>

<?php
include_once "./assets/modules/footer.php";

?>