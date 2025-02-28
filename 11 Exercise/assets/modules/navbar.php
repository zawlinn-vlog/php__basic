<?php

require_once "./assets/system/config.php";
    

?>
<nav class="navbar navbar-expand-lg bg-white position-sticky z-3">
    <div class="container">
        <a href="index.php" class="navbar-brand">LOGO</a>
        <div class="navbar-toggler" data-bs-target="#myNav" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </div>
        <div class="navbar-collapse collapse bg-white" id="myNav">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="blog.php" class="nav-link">Blogs</a>
                </li>
                <li class="nav-item">
                    <a href="war.php" class="nav-link">Wars</a>
                </li>
                <li class="nav-item">
                    <a href="politic.php" class="nav-link">Politics</a>
                </li>
                <li class="nav-item">
                    <a href="itnews.php" class="nav-link">IT News</a>
                </li>

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Members
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Register</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> -->
               

                <?php

                    if(isset($_SESSION['role'])){

                       if($_SESSION['role'] == "Administrator"){
                        $secNav = <<<NAVBAR
                            <li class="nav-item dropdown">
                                <span class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                    Administrator
                                </span>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="createpost.php" style="font-size: 1.6rem;">Create Post</a></li>
                                    <li><a class="dropdown-item" href="users.php" style="font-size: 1.6rem;">Show All Users</a></li>
                                    <hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="logout.php" style="font-size: 1.6rem;">Log Out</a></li>
                                </ul>
                            </li>
                        NAVBAR;

                        echo $secNav;
                       }else{

                        $secNav = <<<NAVBAR
                            <li class="nav-item dropdown">
                                <span class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                    Member
                                </span>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="createpost.php" style="font-size: 1.6rem;">Create Post</a></li>
                                    
                                    <hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="logout.php" style="font-size: 1.6rem;">Log Out</a></li>
                                </ul>
                            </li>
                        NAVBAR;

                        echo $secNav;  
                       }
                    } 
                    else{
                        $secNav = <<<NAVBAR

                            <li class="nav-item ps-4 ps-md-0">
                                <a href="login.php" class="nav-link">Login</a>
                            </li>
                        NAVBAR;

                        echo $secNav;
                    }

                ?>
               
            </ul>
        </div>
    </div>
</nav>