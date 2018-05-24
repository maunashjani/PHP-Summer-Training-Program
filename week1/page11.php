<?php 

// $x = 20; 
// $y = 30;
 
// function addition() { 
//     //$z = $x + $y;
//     //echo $z;

//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }
 
// addition(); 
// echo $z; 


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

?>