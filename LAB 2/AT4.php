<?php

$num1 = 10;
$num2 = 20;
$num3 = 15;

if ($num1 >= $num2 && $num1 >= $num3) {
    echo "The largest number is: $num1\n";
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "The largest number is: $num2\n";
} else {
    echo "The largest number is: $num3\n";
}
?>
