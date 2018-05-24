<?php
    
    $data = fopen("demo.txt", "r") or die("Unable to open file!");

    //echo fread($data,filesize("demo.txt"));

    //echo fgets($data);

    while(!feof($data)) {
        echo fgets($data) . "<br>";
      }

    fclose($data);
?>