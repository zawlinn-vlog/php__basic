<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <?php

    $str = "There is no one in the world and one on the street in the city and no one to love in the world!";


    echo ucwords($str) . "<br/>";
    echo strlen($str) . "<br/>";
    echo strpos($str, 'the') . "<br/>";
    echo strrpos($str, 'the') . "<br/>";
    echo stripos($str, 'NO') . "<br/>";
    echo strripos($str, 'NO') . "<br/>";
    echo str_word_count($str) . "<br/>";
    echo substr( $str, 9) . "<br/>";
    echo substr( $str, 0, 11) . "<br/>";
    echo chunk_split( $str, 4, '-') . "<br/>";

    $s1 = "Hello World in the city.";
    $s2 = "Hello World";

    echo strcmp($s1, $s2) . "<br/>";

    $price = 50000000;

    echo $price . "<br/>";

    echo number_format($price) . "<br/>";
    echo number_format($price, 2, '.', '-') . "<br/>";
    

    // $dxml =  simplexml_load_file("./assets/doc/data.xml");

    // // var_dump($dxml);

    // foreach($dxml as $key => $val){

    //     echo $key . " => " . $val . "<br/>";
    // }


    $xdata = <<<START
        <coder>
            <name> Zaw Linn </name>
            <age> 34 </age>
            <edu> Graduated </edu>
        </coder>

    START;


    $dxml = simplexml_load_string($xdata);

    foreach ($dxml as $k => $v){
        echo $k . " => " . $v . "<br/>";
    }


    $inputData = ['name' => 'Zawlinn', "age" => 34, "dob" => '12.2.1991', 'edu' => "graduated"];

    $file = "assets/doc/test.xml";

    $handler = fopen($file, 'w');

    $outData = "<code>";

    foreach($inputData as $key => $val){
        $outData .= "<$key>" . $val . "</$key>";
    }

    $outData .= "</code>";

   fwrite($handler, $outData);

   fclose($handler);



    ?>
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
</body>
</html>