<?php
    session_start();
    if($_SESSION['studentID']==null)
    {
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php include 'plugins.php';?>
   
   </head>
   <body>
   <div class="container">
   
    <?php include 'header.php';?>

    <div id="main">
        <h1 style="text-align:center"> WELCOME USER!</h1>

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <a href="profile.php">Profile</a>
            <input type="submit" value="logout">
        </form>

        <?php

            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                session_destroy();
                header("Location:index.php");
            }
        ?>
    </div>

    <?php include 'footer.php';?>
    
    </div>
</body>
</html>