<?php

// for loop example
echo "For Loop: " . PHP_EOL;

for ($i = 1; $i <= 3; $i++) {
    echo $i . PHP_EOL;
}

// while loop example
// 1-3
$i = 1;

echo "While Loop: " . PHP_EOL;

while ($i <= 3) {
    echo $i . PHP_EOL;
    $i++;
}

// do while loop example
// i = 1
$i = 1;

echo "Do While: " . PHP_EOL;

do {
    echo $i . PHP_EOL;
    $i++;
} while ($i <= 3);

// foreach loop example
$colors = ["Blue", "Green", "Red"];

echo "Foreach Loop: " . PHP_EOL;

foreach ($colors as $color) {
    echo $color . PHP_EOL;
}

?>
