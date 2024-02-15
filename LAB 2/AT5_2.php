<?php


$even_array = [];
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $even_array[] = $i;
    }
}

for ($i = 10; $i <= 100; $i++) {
    if (!in_array($i, $even_array)) {  //(array_search($i, $even_array) === false)
        echo $i . " ";
    }
}

?>
