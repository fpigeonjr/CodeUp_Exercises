<?php
/*
CodeUp Day 3
Dev: Frank Pigeon
Date: May 8, 2014
*/

//variables

$a = 5;
$b = 10;
$c = '10';


if ($a < $b) {
    // output the appropriate result
    echo "$a is less than $b\n";
}

if ($b > $a) {
    // output the appropriate result
    echo "$b is greater than $a\n";
}

if ($b >= $c) {
    // output the appropriate result
    echo "$b is greater than or equal to $c\n";
}

if ($b <= $c) {
    // output the appropriate result
    echo "$b is less than or equal to $c\n";
}

if ($b == $c) {
    // output the appropriate result
    echo "$b is the same value to $c\n";
}

if ($b === $c) {
    // output the appropriate result
    echo "$b is identical to $c\n"; //same type
}

// output the appropriate result
if ($b != $c) {
    echo "$b is not equal to $c\n";
}

// output the appropriate result
if ($b !== $c) {
    echo "$b is not identical to $c\n";
}

?>
