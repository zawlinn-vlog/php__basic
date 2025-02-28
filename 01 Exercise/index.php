<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body class="p-5">

<?php


    # OUTPUT (ECHO and PRINT)

    echo "HELLO PHP", "<br/>";

    print "HELLO PHP";

    echo "<br/>";

    # Variable 
    $firstname = 'Zaw Linn';
    $lastname = 'Tun';
   

    echo "My name is $firstname $lastname.";

    echo "<br/>";

    # PRINT Return or not

    $res = print "$firstname";

    echo "<br/>";

    echo $res;

    echo "<br/>";

    # ECHO Return or not

    // echo "<br/>";

    // $res = echo "$firstname";

    // echo "<br/>";

    // echo $res;

    // echo "<br/>";


    echo "My first name is \$firstname. <br/>";
    echo "My first name is \${firstname} <br/>";
    echo "My first name is \{$firstname} <br/>";
    echo "My first name is {\$firstname} <br/>";

    echo "My first name is {$firstname}\n My job is Developer.";

    // header("Content-type: text/plain");


    # CONCAT

    $fullname = $firstname . $lastname;

    echo "my name is $fullname";

    $gender = 'male';

    echo "<br/>";
    echo "$gender";


    # COMMENT 

    // - single line comment // or #

    // - multi line comment /* */

    $int = 4000;

    echo "<br/>";
    echo $int;

    echo PHP_INT_MAX;
    echo "<br/>";
    echo PHP_INT_MIN;
    echo "<br/>";
    echo PHP_INT_SIZE;


    // $str = 'I am zawlinn from mae sot.';

    // echo "<br/>";
    // echo "The length of the string is ", strlen($str), ".";

    $bol = true;

    echo "<br/>";
    echo $bol;

    $test = null; # return empty
    $test = ''; # return empty
    echo "<br/>";
    echo $test; 

    # argv[index] & argc 
/*
    echo $argv[1];
    echo $argc;

*/

# PHP STRING 
$str = "This is the world, we are living.";

echo "<br/>";

## STRING PROPERTIES

# strlen(str)-  returns the length of a string.
   
echo strlen($str); # 33 letter

echo "<br/>";

## str_word_count(str) - return the number of words.

echo str_word_count($str); # 7 words

## strpos(str) - find and return the index number of finding letter.

echo "<br/>";

echo strpos($str, 'world'); # 12 index number. begin 0 


## MODIFY STRING

### TO UPPER CASE

echo "<br/>";
echo strtoupper($str);

#### TO LOWER CASE

echo "<br/>";
echo strtolower($str);

#### REMOVE WHITE SPACE

// $str = '      this is the world, we are living.      ';

echo "<br/>";

echo trim($str);

#### reverse string

// echo "<br/>";

// echo strrev($str);

#### STRING to SPRIT AS AN ARRAY

// echo "<br/>";
// $ary =  explode(' ', $str);

// print_r($ary);

### STRING substr(str)
// echo substr($str, 5);

### NUMBER 
/*
    - Interger
    - Float
    - Number String

    Addition
    - Infinity
    - NaN
*/

$strnum = '10px';
    echo (int)$strnum;
    var_dump((integer)$strnum);
    var_dump(intval($strnum));


    # Casting

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL
    
    $a = (array) $a;
    $b = (array) $b;
    $c = (array) $c;
    $d = (array) $d;
    $e = (array) $e;

   print_r($a);
   print_r($b);
   print_r($c);
   print_r($d);
   print_r($e);


   define('USERNAME', 'root');

   echo USERNAME;

   // CONSTANT VARIALBE

   const MYCAR = 'Toyota';
   echo MYCAR;


$doc = <<<START
    <h3 class='text-primary'> This is Heading </h3>
    <button class='btn btn-primary'> Click Me </button>
START;

echo $doc;

?>
    
<script src="assets/js/app.js"></script>
</body>
</html>