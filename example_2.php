<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment22</title>
</head>
<body>
<?php
// 1. Declare and initialize the array
$array = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

// 2. Print all elements of the array
echo "Array elements: ";
foreach ($array as $element) {
    echo $element . " ";
}
echo "\n";

// 3. Calculate and print total of odd elements
$sumOdd = 0;
foreach ($array as $element) {
    if ($element % 2 != 0) {
        $sumOdd += $element;
    }
}
echo "Total of odd elements: $sumOdd\n";

// 4. Calculate and print total of even elements
$sumEven = 0;
foreach ($array as $element) {
    if ($element % 2 == 0) {
        $sumEven += $element;
    }
}
echo "Total of even elements: $sumEven\n";

// 5. Calculate and print total of all elements
$sumAll = array_sum($array);
echo "Total of all elements: $sumAll\n";

// 6. Find minimum element and its positions
$minValue = min($array);
echo "Minimum element: $minValue at positions: ";
foreach (array_keys($array, $minValue) as $position) {
    echo $position . " ";
}
echo "\n";

// 7. Find maximum element and its positions
$maxValue = max($array);
echo "Maximum element: $maxValue at positions: ";
foreach (array_keys($array, $maxValue) as $position) {
    echo $position . " ";
}
echo "\n";
?>
</body>
</html>
