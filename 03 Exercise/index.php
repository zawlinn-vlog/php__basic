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

         $fname = '';
         $lname = '';
         $uname = '';
         $email = '';
         $country = '';
         $gender = '';
         $dob = '';
         $agree = '';

         $data = array();


            if(isset($_REQUEST['submit'])){
                $fname = $_REQUEST['fname'];
                $lname = $_REQUEST['lname'];
                $uname = $_REQUEST['username'];
                $email = $_REQUEST['email'];
                $country = $_REQUEST['country'];
                $gender = $_REQUEST['gender'];
                $agree = $_REQUEST['agree'];
                $dob = $_REQUEST['dob'];


                $data["First Name"] = $fname;
                $data["Last Name"]  = $lname;
                $data["Username"]  = $uname;
                $data["Email"] = $email;
                $data["Country"] = $country;
                $data['Date of Birth'] = $dob;
                $data['gender']  = $gender;
                $data['agree'] = $agree;
                

                # FILE UPLOAD

                $file = $_FILES['file'];

                move_uploaded_file($file["tmp_name"], "./assets/media/".$file["name"]);
                
            }


            // var_dump($data);



        ?>

       

        <div class="container">
            <div class="row gap-3">
                <div class="col border border-primary rounded p-5">
                    <h3 class="text-primary mb-4">Register &mdash;</h3>
                    <form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data" class="d-grid gap-4" >
                       <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="fname" class="form-label">First Name &mdash;</label>
                                    <input type="text" name="fname" id="fname" class="form-control" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="lname" class="form-label">Last Name &mdash;</label>
                                    <input type="text" name="lname" id="lname" class="form-control" required>
                                </div>
                            </div>
                       </div>

                       <div class="form-group">
                        <label for="username" class="form-label">Username &mdash;</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                       </div>

                       <div class="form-group">
                        <label for="email" class="form-label">Email &mdash;</label>
                        <input type="email" name="email" id="email" class="form-control"required>
                       </div>

                       <div class="form-group">
                        <label for="fileupl" class="form-label">Upload your Photo &mdash;</label>
                        <input type="file" name="file" id="filupl" class="form-control">
                       </div>

                       <div class="form-group">
                        <select name="country" id="" class="form-select" required>
                            <option value="">Choose Your Country</option>
                            <option value="mm">Myanmar</option>
                            <option value="th">Thailand</option>
                            <option value="ind">India</option>
                            <option value="malay">Malaysia</option>
                        </select>
                       </div>

                       <div class="form-group">
                        <label for="dob" class="form-label">Date of Birth &mdash;</label>
                        <input type="date" name="dob" id="dob" class="form-control">
                       </div>

                       
                        <div class="d-flex gap-5 mt-3">
                            <div class="form-check form">
                                <input type="radio" name="gender" id="male" class="form-check-input" checked value="0">
                                <label for="male" class="form-label-label">Male</label>
                            </div>
                                        
                            <div class="form-check ">
                                <input type="radio" name="gender" id="female" class="form-check-input" value="1">
                                <label for="female" class="form-label-label">FeMale</label>
                            </div>
                            <div class="form-check ">
                                <input type="radio" name="gender" id="other" class="form-check-input" value="2">
                                <label for="other" class="form-label-label">Other</label>
                            </div>
                        </div>
                        
                        <div class="form-check form-switch">
                            <input type="checkbox" name="agree" id="agree" class="form-check-input" value="1" required checked>
                            <label for="agree" class="form-check-label">I accept all of agreement and policy</label>
                        </div>

                        <div class="d-flex gap-2 mt-4">
                            <button class="btn btn-primary ms-auto px-3" type="submit" name="submit">Register</button>
                            
                        </div>
                    </form>
                </div>
                <div class="col border border-primary rounded p-5">
                    <h3 class="text-primary">Register User Data &mdash;</h3>

                    <div class="d-grid mt-5">
                        <ul class="list-group">

                        <?php

                        function doc($k, $v){
                            $docli = <<<START

                                <li class="list-group-item py-3 mb-3 border border-muted"> $k : <span class="text-primary">$v</span></li>
                            START;

                            return $docli;
                        }

                
                 
                        if(count($data) > 0){
                            
                            foreach($data as $key => $val){
                                echo doc($key, $val);
                            }
                        }


                        // $f = "./assets/media/text.txt";
                        // $h = fopen($f,"r");
                        // $size = filesize($f);
                        // $fileData = fread($h, $size);
                        // echo $fileData;
                            
                        ?>
                             

                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>


       


        <?php

        /*
            function doIt($name = 'Zawlinn'){
                return "My name is $name";
            }

           echo doIt() . "<br/>";
            echo doIt('Saram') . "<br/>";


        # passing by value and passing by refrence

        # Passing by value

        $a = 20;
        $b = $a;

        echo $a, $b;

        $a = 50;

        echo $a, $b;


        # passing by refrence

        $c = 40;
        $d = &$c;

        echo $c, $d . "<br/>";
        
        $c = 80;
        
        echo $c, $d . "<br/>";

        # passing by refrence for method

        $age = 10;

        function getAge(&$age){
            $age *= $age;
            return $age;
        }

        echo getAge($age);

        echo $age . "<br/>";

        # SCOPING - GLOBAL & LOCAL

        $firstname = 'Zawlinn';

        function getName(){
            global $firstname;
            $lastname = " Tun";
            return $firstname . $lastname;
        }

        echo getName() . "<br/>";

        // STATIC

        function counting(){
            STATIC $startPoint = 0;

            return ++$startPoint;
        }

        echo counting() . "<br/>";
        echo counting() . "<br/>";
        echo counting() . "<br/>";
        echo counting() . "<br/>";
        echo counting() . "<br/>";

        # Function exist

        $cou = 'counting';

        var_dump(function_exists($cou));
    */
        ?>
   

        <script src="./assets/js/app.js"></script>
    </body>
</html>