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

    <?php
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

            $regID=$_SESSION['studentID'];
            $name="";
            $email="";
            $class="";
            $contact="";
            
            $sql = "SELECT * FROM registration where RegID=?";
            
            $stmt = $conn->stmt_init();
            $stmt->prepare($sql);
            $stmt->bind_param("i", $regID);
            $stmt->execute();
            $result = $stmt->get_result();
            $resultArray = $result->fetch_assoc();
            if($resultArray)
            {
                $name= $resultArray['Name'];
                $email=  $resultArray['Email'];
                $class=  $resultArray['Class'];
                $contact= $resultArray['ContactNo'];
            }
            else
            {
                echo "<script>swal('No data found');</script>";
            }
            
            mysqli_close($conn);
    ?>

    <div id="main">
    <form action="<?php $_SERVER['PHP_SELF'];?>" METHOD ="POST">
        <div class="form-group">
            <label for="txtRegID">RegID:</label>
            <input class="form-control" type="text" value='<?php echo $regID; ?>' name="txtRegID" id="txtRegID">
        </div>
        <div class="form-group">
            <label for="txtName">Name:</label>
            <input class="form-control" type="text" value='<?php echo $name; ?>' name="txtName" id="txtName">
        </div>
        <div class="form-group">
            <label for="Email">Email:</label>
            <input class="form-control" type="text" value='<?php echo $email; ?>' name="txtEmail" id="txtEmail">
        </div>
        <div class="form-group">
            <label for="class">Class:</label>
            <input class="form-control" type="text" value='<?php echo $class; ?>' name="txtClass" id="txtClass">
        </div>
        <div class="form-group">
            <label for="contactno">Contact no:</label>
            <input class="form-control" type="text" value='<?php echo $contact; ?>' name="txtContact" id="txtContact">
        </div>
        <div class="form-group">
            <input type="submit" value="Update">
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

            $sregID = $_SESSION['studentID'];
            $sname=$_POST['txtName'];
            $semail=$_POST['txtEmail'];
            $sclass=$_POST['txtClass'];
            $scontact=$_POST['txtContact'];

            $sql="update registration set Name='$sname', Email='$semail', Class='$sclass', ContactNo='$scontact' where RegID='$sregID'";
            if (mysqli_query($conn,$sql))
            {
                echo "<script>swal('Record Updated.').then(() => {window.location.href='profile.php';});</script>";
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