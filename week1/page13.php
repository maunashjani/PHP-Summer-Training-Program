<?php

// echo "String Functions.<br>";

// $company="Google";

// //echo $company;

// echo strtoupper($company);

// echo "<br>";

// echo strtolower($company);

// echo "<br>";

// echo strlen($company);


// $s1 = "PHP is a server side language.";

// echo $s1 ."<br>";

// echo str_word_count($s1);

// echo "<br>";

// echo strrev($s1);

// echo "<br>";

// echo strpos($s1, "a");

// echo "<br>";

// echo str_replace("language","scripting language", $s1);

// echo "<br>";

// echo substr($s1, 3, 5);


$s2 = "This is a very good class. The student in this class are intelligent.";

//Take a substring from "good" to end.

//echo substr($s2,strpos($s2,"good"),strlen($s2));

//Take a substring from "good" to "student".

echo "<br>";

//echo substr($s2,strpos($s2,"good"),strpos($s2,"student"));

$len = strlen($s2);

echo $len;

echo "<br>";

$s3 = substr($s2, strpos($s2, "good"), $len);

$final = substr($s3, 0, strpos($s3, "student")+7);

echo $final;


?>