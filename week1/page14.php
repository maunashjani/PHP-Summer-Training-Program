<?php


//echo date("Y/m/d");
//echo date("d/m/Y");
//echo date("l");

// date_default_timezone_set("Asia/Kolkata");
// echo date("h:i:sa")


$d=strtotime("12:07am May 12 2018");
echo "New Date is: " . date("Y-m-d h:i:sa", $d);
echo "<br>";
echo "New Date is: " . date("d/m/Y h:i:sa", $d);
?>