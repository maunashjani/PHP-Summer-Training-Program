<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form enctype="multipart/form-data" action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
        <p>Upload your file</p>
        <input type="file" name="uploaded_file"/><br />
        <input type="submit" value="Upload"/>
    </form>


    <?php
        if(!empty($_FILES['uploaded_file']))
        {
            $path = "images/";
            $path = $path . basename( $_FILES['uploaded_file']['name']);
            if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) 
            {
                echo "The file ".basename( $_FILES['uploaded_file']['name'])." has been uploaded";
            
                $data = fopen("images.txt", "a") or die("Unable to open file!");

                $txt = "\n".basename( $_FILES['uploaded_file']['name']);

                fwrite($data, $txt);

                fclose($data);
            } 
            else
            {
                echo "There was an error uploading the file, please try again!";
            }
        }
    ?>

</body>
</html>