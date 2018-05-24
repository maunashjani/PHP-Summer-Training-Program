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
</head>
<body>
    <div class="container">

    <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "summertraining";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // Check connection
        if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM student";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            
            echo "<table class='table table-bordered'>";
            echo "<tr>";
            echo "<td>Student ID</td>";
            echo "<td>Name</td>";
            echo "</tr>";

            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['studentID']."</td>";
                echo "<td>".$row['sname']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        } 
        else 
        {
            echo "No record(s) found.";
        }

        mysqli_close($conn);
    ?>

    </div>
</body>
</html>