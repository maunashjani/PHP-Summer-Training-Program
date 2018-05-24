<?php

// //function definition
// function message() {
//     echo "Hello world!";
// }

// //function call
// message();

// function message($name) {
//     echo "Hello $name";
// }

// message('ABCD');


//write a function to add 2 numbers give values in fn defintion

// function add()
// {
//     $a=10;
//     $b=12;
//     $c = $a + $b;
//     echo $c;
// }

// add();

//write a function to add 2 numbers give values using fn parameters

// function add($a, $b)
// {
//     $c = $a + $b;
//     echo $c;
// }

// add(10,30);


// //With return
// function add($a, $b)
// {
//     $c = $a + $b;
//     return $c;
// }

// // $result = add(10,30);

// // echo $result;

// echo add(10,30);



//Write a function to calculate simple interest

function simpleInterest($p, $r, $n)
{
    return ($p*$r*$n)/100;
}

$si = simpleInterest(1000,1,1);

//echo $si;

function totalAmount($si, $p)
{
    return $si + $p;
}

echo totalAmount($si, 1000);

?>