<?php

require_once "./assets/system/config.php";


if(!isset($_SESSION['role'])) header('location:index.php');



include_once "./assets/modules/head.php";
include_once "./assets/modules/navbar.php";
include_once ("./assets/modules/header.php");

?>


<div class="container mt-4">
    <div class="row">
        <?php

            echo pullCategories(2);

        ?>
    </div>
</div>



<?php

include_once "./assets/modules/footer.php";


?>