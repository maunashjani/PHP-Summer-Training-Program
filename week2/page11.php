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

        $sql = "INSERT INTO student (sname, semail, sphone, sclass, marks)
                VALUES ('ABCD', 'john@example.com', '1234567890', 'TYIF', 100)";

        if (mysqli_query($conn, $sql)) 
        {
                echo "New record created successfully";
        } 
        else 
        {
            echo "Error: ". mysqli_error($conn);
        }        

        mysqli_close($conn);
    ?>

    </div>
</body>
</html>