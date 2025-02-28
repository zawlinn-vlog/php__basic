<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'db');

function dbconnection(){
    $con = mysqli_connect(DB_HOST,DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno() > 0){
        del('Connection Fail!');
    }

    return $con;
}


//

function errchk($db){
    echo "<pre>" . print_r($db, true) . "</pre>";
}

