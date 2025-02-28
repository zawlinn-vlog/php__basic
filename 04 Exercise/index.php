<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container py-5">
        <?php

            $createFile = false;
           
            $dataString = 'Empty Data';

            $file = "./assets/doc/comments.txt";
           

        // Create Comment File

            (function($f){
                if(!file_exists($f)){
                    $handler = fopen($f,'w');           
                }
            })($file);

            if(isset($_REQUEST["create"])){
                $commentsData = $_REQUEST["comment"];

                if(file_exists($file)){
                    $handler = fopen($file, 'w');
                   
                    fwrite($handler, $commentsData);
                    
                    $dataString = 'File is Written.';

                    fclose($handler);
                }
            }
            if(isset($_REQUEST["open"])){
                if(file_exists($file)){
                    // $handler = fopen($file, 'r');
                    // $fsize = filesize($file);
                    // $dataString = fread($handler, $fsize);

                    $dataString = file_get_contents($file);
                   
                }
            }
            if(isset($_REQUEST["apply"])){
                $data = $_REQUEST['comment'];
                if(file_exists($file)){
                    $handler = fopen($file, 'a');
                    fwrite($handler, " ".$data);

                    $dataString = 'File is Applied.';

                    fclose($handler);
                }
            }

        ?>
        <div class="row gap-4">
            <div class="col p-3">
                <form action="<?php $_PHP_SELF ?>" method="POST" class="form-create">
                    <h3 class="text-primary mb-5">Create, Read and Apply File &mdash;</h3>
                    <div class="form-floating">
                        <textarea name="comment" id="comment" class="form-control" style="resize:none; height: 10rem" ></textarea>
                        <label for="comment">Comments</label>
                    </div>

                    <div class="d-flex gap-3 mt-4 justify-content-end">
                        <button class="btn btn-primary" type="submit" name="create">Create File</button>
                        <button class="btn btn-primary" type="submit" name="open">Read File</button>
                        <button class="btn btn-primary" type="submit" name="apply">Apply File</button>
                    </div>
                </form>
            </div>
            <div class="col border border-primary rounded p-3">
                <h3 class="text-primary">Result &mdash;</h3>
                <ul class="mt-3 list-group">
                    <li class="list-group-item py-3 mb-3">
                        Create File : <span class="text-primary">Created</span>
                    </li>
                    <li class="list-group-item py-3 mb-3">
                        File Data : <span class="text-primary"><?php echo $dataString; ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script src="./assets/js/app.js"></script>
</body>
</html>