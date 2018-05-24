<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
</head>
<body>
    

<!-- Make a php page named page4.php
Using an html <form> tag, textarea and button
send the data to excute via php code
the sent data should be stored in a file named "demo2.txt" 
use $_SERVER['PHP_SELF']
-->


<div class="container">
    
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    
    <textarea name="txtData" id="txtData" cols="30" rows="10"></textarea>
    
    <input type="submit" value="Create File">
    
    </form>


    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $data = fopen("demo2.txt", "w") or die("Unable to open file!");

            $txt = $_POST["txtData"];

            fwrite($data, $txt);

            fclose($data);

            echo "<script>swal('File Created');</script>";
        }
        
    ?>
</div>




</body>
</html>