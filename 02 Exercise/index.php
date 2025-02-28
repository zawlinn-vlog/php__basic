<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body class="p-5">
    <?php
    $num1 = 40;
    $num2 = '40';

    echo $num1 + $num2;
    echo "<br/>";
    echo $num1 - $num2;
    echo "<br/>";
    echo $num1 * $num2;
    echo "<br/>";
    echo $num1 ** 3;
    echo "<br/>";
    echo $num1 / $num2;
    echo "<br/>";
    echo $num1 % $num2; // 40 
    echo "<br/>";

    echo $num1++;
    echo "<br/>";
    echo ++$num1;
    echo "<br/>";
    echo $num1;
    echo "<br/>";
    echo $num1--;
    echo "<br/>";
    echo --$num1;
    echo "<br/>";

    # CONDITIONAL STATEMENT

    if($num1 == $num2){
        echo "$num1 is Less than $num2.";
        echo "<br/>";
    }else if($num2 < $num1){
        echo "$num2 is Greater than $num1";
        echo "<br/>";
    }else{
        echo "no one is Greater.";
        echo "<br/>";
    }


    # Comparison Operators

    var_dump($num1 == $num2);
    echo "<br/>";
    var_dump($num1 === $num2);
    echo "<br/>";
    var_dump($num1 != $num2);
    echo "<br/>";
    var_dump($num1 < $num2);
    echo "<br/>";
    var_dump($num1 > $num2);
    echo "<br/>";
    var_dump($num1 >= $num2);
    echo "<br/>";
    var_dump($num1 <= $num2);

    # LOGICAL OPERATORs
    echo "<br/>";
    var_dump($num1 == $num2 && true);
    echo "<br/>";
    var_dump($num1 == $num2 && false);
    echo "<br/>";
    var_dump(!($num1 == $num2 && false));
    echo "<br/>";


    # Assignment Operators

    echo $num1 += 10;
    echo "<br/>";
    echo $num1 -= 10;
    echo "<br/>";
    echo $num1 *= 10;
    echo "<br/>";
    echo $num1 **= 3;
    echo "<br/>";
    echo $num1 /= 10;
    echo "<br/>";
    echo $num1 %= 10;
    echo "<br/>";

    # Conditional Operator

    echo 4 > 5 ? "True" : "False";
    echo "<br/>";

    # Switch Statement

    const day = 'Monday';

    switch (day) {
        case 'Sunday':
            echo "Today is Sunday.";
            break;
        case 'Sataday':
            echo "Today is Sataday.";
            break;
        case 'Tueday':
            echo "Today is Tueday.";
            break;
        case 'Wedesday':
            echo "Today is Wedesday.";
            break;
        case 'Thursday':
            echo "Today is Thursday.";
            break;
        case 'Friday':
            echo "Today is Friday.";
            break;
        
        default:
            echo "I don't know what today is it?";
            break;
    }

    echo "<br/>";

    for($start = 0; $start < 10; $start++){
        echo "This is Looping $start. <br/>";
    }

    $i = 20;

    // while($i < 10){
    //     echo "This is While Loop - " . $i. "<br/>";
    //     $i++;
    // }


    do{
        echo "This is While Loop - " . $i. "<br/>";
        $i++;
    }while($i < 10); /// if condition is false at least it do once.

    for($i = 0; $i < 10; $i++){

        // if($i == 5) continue;
        if($i == 6) break;

        echo $i . "<br/>";
    }

    # Array 
    $arr = array();
    $arr[0] = 'Zero';
    $arr[1] = 'One';
    $arr[2] = 'Two';

    // print_r($arr . "<br/>");

    $arr2 = array(200, 100, 500, 'array');

    // var_dump($arr2  . "<br/>");


    # Associative Array

    $ascArr = array();
    $ascArr['first'] = "Frist Name";
    $ascArr['last'] = "last Name";
    $ascArr[100] = 1000;
    $ascArr[true] = 'This is true';

    var_dump($ascArr);

    echo $ascArr[true];

    $ascArr2 = array('name'=> 'Zawlinn', 'age'=> 27, 1 => 'male', 'job' => false);

    var_dump($ascArr2);

    # Multidimension Array

    $mArr = array(
        array(1,3,5,6),
        array(100,200,400,100),
        array('red', 'green', 'blue')
    );

    var_dump($mArr);

    echo $mArr[2][1];

    for ($i =0; $i < count($arr); $i++){
        echo $arr[$i] . "<br/>";
    }

    for($i = 0; $i < count($mArr); $i++){
        for($j = 0; $j < count($mArr[$i]); $j++){
            echo $mArr[$i][$j] . "<br/>";
        }
    }

    foreach ($arr as $val){
        echo $val. "<br/>";
    }

    foreach($ascArr as $key => $val){
        echo "$key has $val. <br/>";
    }


    # FUNCTION

    function doIt(){
        echo "This is doit Function.";
    }

    // doIt();

    $one = 'doIt';

    $one();

    function doItpara($name){
        echo "This is doIt with para $name name.";
    }

    doItpara("Testing");
 
    ?>

    <script src="./assets/js/app.js"></script>
</body>
</html>