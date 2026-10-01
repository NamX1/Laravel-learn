<?php
$name = "Mia"; // Var start with $ and end with ;
$age = 20;

if ($age >= 18) {
    echo "Adult" . PHP_EOL;
} elseif ($age > 15) {
    echo "Teen" . PHP_EOL;
} else {
    echo "Kid" . PHP_EOL;
}

$colors = ["Red", "Blue"]; // Arrays hold lists
echo $colors[1] . PHP_EOL; // "Blue"

function greet($person) { // Functions package reusable steps (like in golang (func))
    return "Hello, " . $person . PHP_EOL;
}

echo greet($name) . PHP_EOL; // . joins text

?>
