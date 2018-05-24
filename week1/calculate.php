<?php

$p = $_POST['pAmount'];
$r = $_POST['rate'];
$n = $_POST['years'];

function simpleInterest($p, $r, $n)
{
    return ($p*$r*$n)/100;
}

$si = simpleInterest($p, $r, $n);

echo "The simple interest is <b>$si</b>";

?>