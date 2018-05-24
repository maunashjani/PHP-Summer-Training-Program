
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

    <form action="<?php $_SERVER['PHP_SELF'];?>" METHOD ="POST">
            <div class="form-group">
    <label for="txtName">name:</label>
    <input class="form-control" type="text" name="txtName" id="txtName">
</div>
     <div class="form-group">
        <label for="Email">Email:</label>
        <input class="form-control" type="text" name="email" id="Email">
    </div>
    <div class="form-group">
            <label for="password">password:</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>
        <div class="form-group">
                <label for="confirm">confirm password:</label>
                <input class="form-control" type="password" name="confirm" id="confirm">
            </div>
            <div class="form-group">
                <label for="class">Class:</label>
                <input class="form-control" type="text" name="class" id="class">
            </div>
            <div class="form-group">
                <label for="contactno">Contact no:</label>
                <input class="form-control" type="text" name="contact" id="contact">
            </div>
            <div class="form-group">
                    
                    <input type="submit" value="register">
            </div>
        </form>

        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="studentsprofile";

            //create connection
            $conn=mysqli_connect($servername,$username,$password,$dbname);

            //check connection
            if(!$conn){
                die("connection failed:" . mysqli_connect_error());
            }

            $sname=$_POST['txtName'];
            $semail=$_POST['email'];
            $password=$_POST['password'];
            $class=$_POST['class'];
            $contact=$_POST['contact'];

            $sql=" INSERT INTO registration (Name,Email,Password,Class,ContactNo)
                    VALUES ('$sname','$semail','$password','$class','$contact')";
            if (mysqli_query($conn,$sql))
            {
                echo "<script>swal('registration successful');</script>";
            }
            else
            {
                echo"Error:" .mysqli_error($conn);
            }

        mysqli_close($conn);
    }
 
    ?>

    </div>

    <?php include 'footer.php';?>
 
    </div>
    
</body>
</html>