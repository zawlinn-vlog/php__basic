<?php

require_once "./assets/system/config.php";


if(!isset($_SESSION['role'])) header('location:index.php');



include_once "./assets/modules/head.php";
include_once "./assets/modules/navbar.php";
include_once ("./assets/modules/header.php");

?>


<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-10 mx-auto ">
            <table class="table  table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>User Role</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 

                        $db = dbconnect();

                        $qry = "SELECT * FROM members";


                        $res = mysqli_query($db, $qry);

                        if(mysqli_num_rows($res)){

                            while($row = mysqli_fetch_assoc($res)){

                                $type = $row['usertype'] == 1 ? "Administrator" : "Member";

                                echo '
                                    <tr> 
                                        <td>'.$row['id']. '</td>
                                        <td>'. $row['fullname'].' </td>
                                        <td>' .$row['username']. '</td>
                                        <td>'. $type .' </td>
                                        <td>'. $row['email']. '</td>
                                        <td>
                                            <a href="editmember.php?mid='.$row['id'].'" class="btn btn-primary"> Edit </a>
                                            <a href="deletemember.php?mid='.$row['id'].'" class="btn btn-danger"> Delete </a>
                                        </td>
                                    </tr>
                                ';
                            }
                        }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php

include_once "./assets/modules/footer.php";


?>