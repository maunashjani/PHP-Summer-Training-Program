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
    <!-- <img src="images/image1.jpg" class="img-thumbnail" width="200" height="200">
    <br> -->
    
    <?php
    
    // for($i=1;$i<4;$i++)
    // {
    //     echo '<img src="images/image'.$i.'.jpg" class="img-thumbnail" width="200" height="200">';
    //     echo "<br>";
    // }

    // $images = array("image1.jpg","image2.jpg","image3.jpg");

    // array_push($images,"image4.jpg");

    // foreach($images as $item)
    // {
    //     echo '<img src="images/'.$item.'" class="img-thumbnail" width="200" height="200">';
    //     echo '<br>';
    // }
    

    //create an empty array named "newimages"
    //push the names of images from the file images.txt one by one in the array "newimages"
    //display the images from the "newimages" array.

    $newimages = array();

    $data = fopen("images.txt", "r") or die("Unable to open file!");

    while(!feof($data)) {
       array_push($newimages, fgets($data));
      }

    fclose($data);

    foreach($newimages as $item)
    {
        echo '<img src="images/'.$item.'" class="img-thumbnail" width="200" height="200">';
        echo '<br>';
    }
    
    ?>

</body>
</html>