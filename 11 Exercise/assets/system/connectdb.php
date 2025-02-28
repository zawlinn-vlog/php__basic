<?php

session_start();

// error_reporting(0);

define("DB_HOST", "localhost");
define("DB_USER", 'root');
define("DB_PASS", '');
define("DB_NAME", 'myblog');

function dbconnect(){
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno()){
        return false;
    }

    return $db;

}



// $db = dbconnect();

// errchk($db);


function errchk($db){
    echo "<pre>" . print_r($db, true) . "</pre>";
}

