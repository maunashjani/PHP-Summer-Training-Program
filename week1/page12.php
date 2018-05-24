<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="<?php $_SERVER["PHP_SELF"];?>" method="POST">
    Type your name:<input type="text" id="txtName" name="txtName">
        <br>
        <input type="submit" value="Submit">
    </form>
    
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["txtName"];

        echo "Hello $name";
    }

    ?>

</body>
</html>