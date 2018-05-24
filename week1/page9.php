<?php


// $i=1;

// while($i<10)
// {
//     echo $i++ ."<br>";
// }


// $j=0;
// do{
//     print $j++. "<br>";
// }while($j<10);



// for($i=1;$i<10;$i++)
// {
//    if($i%2==0)
//    { 
//        echo $i ."<br>";
//    }
// }

//Arrays

/*

1. Indexed Array
2. Associative Array
3. Multidimensional Array

*/


//$fruits = array("Apple", "Mango", "Pineapple", "Banana");


//echo $fruits[2];
//echo count($fruits);



// $fruits = array("Apple", "Mango", "Pineapple", "Banana");

// //echo $fruits[1]; //get a value

// $fruits[1] = "Grapes"; //set a value

// $fruitsCount = count($fruits);

// for($i=0; $i<$fruitsCount;$i++)
// {
//     echo $fruits[$i]."<br>";
// }




// //Make an array of 10 numbers and print them.

// //$numbers = array(30,50,20,10,80);

// $numbers = array("oreo","kitkat", 7, "marshmallow", 4, 5, "gingerbread","ics");

// $numCount = count($numbers);

// //sort($numbers);

// //rsort($numbers);

// // for($i=0;$i<$numCount;$i++)
// // {
// //     echo $numbers[$i]."<br>";
// // }


// foreach($numbers as $item)
// {
//     echo $item."<br>";
// }



$marks = array("ABCD"=>"80", "PQRS"=>"37", "DEFG"=>"43", "JKLM"=>"100");

// echo $marks['ABCD'];
// echo "<br>";
// echo $marks['PQRS'];



foreach($marks as $item=>$item_value)
{
    echo "Key is ".$item;
    echo ",";
    echo "Value is ".$item_value;
    echo "<br>";
}


//Create an associative array of days 
//with key as day name and value as day no
//e.g. key=Monday and value=1

?>