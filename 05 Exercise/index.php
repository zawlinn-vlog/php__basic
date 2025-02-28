<?php

    include_once("./assets/system/header.php");

    // header("location: ./login.php");

    // $qry = $_SERVER['QUERY_STRING'];

    // echo $qry;

    // $brw = $_SERVER['HTTP_USER_AGENT'];

    // echo $brw;

    // var_dump(explode(" ", $brw));


    echo rand() . "<br />";

    echo rand(1,10). "<br/>";

    echo microtime() . "<br/>";

    # SUPER GLOBAL VARIABLEs - IMPORTANT

    echo $_SERVER['DOCUMENT_ROOT'] . "<br/>";
    echo $_SERVER['HTTP_USER_AGENT'] . "<br/>";
    echo $_SERVER['HTTP_HOST'] . "<br/>";
    echo $_SERVER['PHP_SELF'] . "<br/>";
    echo $_SERVER['QUERY_STRING'] . "<br/>";
    echo $_SERVER['REMOTE_ADDR'] . "<br/>";
    echo $_SERVER['REQUEST_TIME'] . "<br/>";
    echo $_SERVER['REQUEST_URI'] . "<br/>";
    echo $_SERVER['REQUEST_METHOD'] . "<br/>";
    echo $_SERVER['SERVER_PORT'] . "<br/>";
    echo $_SERVER['SERVER_ADDR'] . "<br/>";
    echo $_SERVER['SERVER_NAME'] . "<br/>";
    echo $_SERVER['SERVER_PROTOCOL'] . "<br/>";
    echo $_SERVER['SCRIPT_FILENAME'] . "<br/>";
    echo $_SERVER['SCRIPT_NAME'] . "<br/>";

    # NOT FREQUENTLY - SUPER GLOBAL

    echo $_SERVER["GATEWAY_INTERFACE"] . "<br/>";
    echo $_SERVER["SERVER_SOFTWARE"] . "<br/>";
    echo $_SERVER["HTTP_ACCEPT"] . "<br/>";
    echo $_SERVER["HTTP_ACCEPT_ENCODING"] . "<br/>";
    echo $_SERVER["HTTP_ACCEPT_LANGUAGE"] . "<br/>";
    echo $_SERVER["HTTP_CONNECTION"] . "<br/>";
    echo $_SERVER["REMOTE_PORT"] . "<br/>";
    echo $_SERVER["SERVER_ADMIN"] . "<br/>";
    echo $_SERVER["SERVER_SIGNATURE"] . "<br/>";


    # set Cookie

    function mysetCookie(){
        setcookie('BM', 'Brighter Myanmar',  time() + 3600,  '/',  '',0);
    }

    // mysetCookie();


    # GET cookie

    function getCookies(){
        if(isset($_COOKIE['BM'])){
            echo $_COOKIE['BM']; #HTTP_COOKIE_VARS
        }
    }

    # DELETE COOKIE

    function mydelCookie(){
        setcookie('BM', 'Brighter Myanmar',  time() - 3600,  '/',  '',0);
    }

    if(isset($_COOKIE['BM'])){
        mydelCookie();
    }

    echo isset($_COOKIE['BM']) ? 'Yes ': "no";



    echo "SERVER ARRAY <br/>";


    // foreach($_SERVER as $key => $val){
    //     echo $key . "&nbsp; &mdash; &nbsp;" . $_SERVER[$key] . "<br/>";
    // }

    getCookies();

    $num = 50000000;
    $str = 'Yangon';

    printf("There are %d people in %s", $num, $str);

    $tFile = "./assets/doc/test.txt";

    $handler = fopen($tFile, 'w');

    fprintf($handler, "There are %d people in %s", $num, $str);

    $s = "There are 50000000 people in Yangon.";

    echo lcfirst($s) . "<br/>";
    echo ucwords($s) . "<br/>";
    echo strtoupper($s) . "<br/>";
    echo strtolower($s) . "<br/>";

    $stest = "    Hello World!   ";

    echo "String Length - " . strlen($stest) . "<br/>";

    $btrim = ltrim($stest);

    echo "String Length - " . strlen($btrim) . "<br/>";

    
    $string = "A the removes whitespace or other predeined character form the left side of a string."

   

?>


    <div class="container py-5">
        <h3 class="text-primary text-uppercase">Include & Include_once &mdash;</h3>

       <details>
            <summary> Include &mdash;</summary>
            <p class="text-muted"> Inlcude acts as copy code to destination.It can pass when the code has error. Muli copy is allowed &mdash;</p>
       </details>

       <details>
            <summary> Include_once &mdash;</summary>
            <p class="text-muted"> Inlcude acts as copy code to destination.It can pass when the code has error. Muli copy doesn't allow &mdash;</p>
       </details>

    </div>
    <div class="container py-5">
        <h3 class="text-primary text-uppercase">Require & Require_once &mdash;</h3>

       <details>
            <summary> Require &mdash;</summary>
            <p class="text-muted"> Require acts as copy code to destination. It can't pass when the code has error. Muli copy is allowed &mdash;</p>
       </details>

       <details>
            <summary> Require_once &mdash;</summary>
            <p class="text-muted"> Require_once acts as copy code to destination.It can't pass when the code has error. Muli copy doesn't allow &mdash;</p>
       </details>


    </div>

<?php

    include_once("./assets/system/footer.php");
?>