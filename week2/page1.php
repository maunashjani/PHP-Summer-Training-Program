<?php
    $data = readfile("demo.txt");

    $pos= strrpos($data,"#");

    echo substr($data, 0, $pos);

?>