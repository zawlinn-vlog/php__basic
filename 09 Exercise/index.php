<?php
// include_once "./assets/modules/db.php";



$sub = json_decode(file_get_contents("./assets/js/viewers.json"));

// errchk($sub);


// $db =dbconnection();
// errchk($db);

// foreach ($sub as $item){

//     foreach($item as $key => $val){
//         echo $key . " => "  . $val . "<br/>";
//     }

//     echo "<hr/>";
// }


/* 
foreach($sub as $item){
    $qry = "INSERT INTO viewers (tutorial_id, total_views, unique_views) values ($item->id, $item->total_views, $item->unique_views)";
    // $db = dbconnection();

  

    $result = mysqli_query($db, $qry);

    echo $result;
}


*/


// $var = "I am zawlinn and live in Mae Sot and studying programming (web and mobile) that is";

// $var = "aeropppplane";

// $res = preg_match("/Web/i", $var);
// $res = preg_match("/^i/", $var);
// $res = preg_match("/is$/", $var);
// $res = preg_match("/p{2,3}/", $var);

// $res = preg_replace("![[:space:]]!", "=>", $var);

// echo $res;
// echo $res ? "TRUE" : "FALSE";



// $var = 'zawlinn.profile@gmail.com';
// $res = preg_match("/^[a-zA-Z]+\.?[a-z]+@[a-z]+\.[a-z]{2,3}$/", $var);

// echo $res ? "TRUE" : "FALSE";



$str = "There is a need, there is a way!";

// $ary = preg_split("!\s!", $str, 3);
// $ary = preg_split("![\s,]!", $str, NULL, PREG_SPLIT_NO_EMPTY);
// $ary = preg_split("![\s,]!", $str, NULL);
// $ary = preg_split("!!", $str, 5);
$ary = preg_split("!!", $str, 5, PREG_SPLIT_OFFSET_CAPTURE);

echo "<pre>" . print_r($ary, true) . "</pre>";



include_once('./assets/modules/header.php');

include_once "./assets/modules/navbar.php";

include_once "./assets/modules/footer.php";