<?php

$numbers = array(10, 20, 30, 40, 50);
$search_element = 30;
$found = false;

foreach ($numbers as $number) {
    if ($number == $search_element) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$search_element is found in the array.\n";
} else {
    echo "$search_element is not found in the array.\n";
}

?>
