<?php
    session_start();
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
    
    <form action="<?php $_SERVER['PHP_SELF'];?>" METHOD ="POST">
        <div class="form-group">
            <label for="Email">Email:</label>
            <input class="form-control" type="text" name="email" id="Email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>
        <div class="form-group">
            <input type="submit" value="login">
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

            $semail=$_POST['email'];
            $password=$_POST['password'];
            
            $sql = "SELECT * FROM registration where email=? and password=?";
            
            $stmt = $conn->stmt_init();
            $stmt->prepare($sql);
            $stmt->bind_param("ss", $semail,$password);
            $stmt->execute();
            $result = $stmt->get_result();
            $resultArray = $result->fetch_assoc();
            if($resultArray)
            {
                //here session variable is created
                //studentID is the key of the session
                //RegID is the value for the session with key studentID
                $_SESSION["studentID"] = $resultArray['RegID'];
                header("Location:welcome.php");
            }
            else
            {
                echo "Invalid Login credentials.";
            }
            
            mysqli_close($conn);

        }
    ?>

    </div>

    <?php include 'footer.php';?>
    
    </div>
</body>
</html>