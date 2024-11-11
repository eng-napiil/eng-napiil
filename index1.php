<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            font-size: 24px;
            font-weight: bold;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid black;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #d9d9d9;
            font-weight: bold;
        }
        th:first-child {
            background-color: #b3b3b3;
        }
    </style>
</head>
<body>

<h4>Name: liiban rage mohamed  &nbsp;&nbsp;&nbsp; ID: c1210594</h4>
<?php
function binary_to_decimal($binary_str) {
    $decimal = 0;
    $binary_str = strrev($binary_str);
    for ($i = 0; $i < strlen($binary_str); $i++) {
        $decimal += $binary_str[$i] * pow(2, $i);
    }
    return $decimal;
}

function decimal_to_octal($decimal) {
    $octal = "";
    while ($decimal > 0) {
        $octal = ($decimal % 8) . $octal;
        $decimal = intdiv($decimal, 8);
    }
    return $octal;
}

function decimal_to_hexadecimal($decimal) {
    $hex_digits = "0123456789ABCDEF";
    $hexadecimal = "";
    while ($decimal > 0) {
        $hexadecimal = $hex_digits[$decimal % 16] . $hexadecimal;
        $decimal = intdiv($decimal, 16);
    }
    return $hexadecimal;
}

$binary_str = "1011"; // Example binary number
$decimal = binary_to_decimal($binary_str);
$octal = decimal_to_octal($decimal);
$hexadecimal = decimal_to_hexadecimal($decimal);

echo "<p>Binary: $binary_str</p>";
echo "<p>Decimal: $decimal</p>";
echo "<p>Octal: $octal</p>";
echo "<p>Hexadecimal: $hexadecimal</p>";

$array = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

echo "<p>Array elements: " . implode(", ", $array) . "</p>";

$odd_sum = 0;
$even_sum = 0;
$total_sum = 0;
$min = PHP_INT_MAX;
$max = PHP_INT_MIN;
$min_positions = [];
$max_positions = [];

foreach ($array as $key => $value) {
    if ($value % 2 != 0) {
        $odd_sum += $value;
    } else {
        $even_sum += $value;
    }
    $total_sum += $value;

    if ($value < $min) {
        $min = $value;
        $min_positions = [$key];
    } elseif ($value == $min) {
        $min_positions[] = $key;
    }

    if ($value > $max) {
        $max = $value;
        $max_positions = [$key];
    } elseif ($value == $max) {
        $max_positions[] = $key;
    }
}

echo "<p>Total of odd elements: $odd_sum</p>";
echo "<p>Total of even elements: $even_sum</p>";
echo "<p>Total of all elements: $total_sum</p>";
echo "<p>Minimum element: $min, Positions: " . implode(", ", $min_positions) . "</p>";
echo "<p>Maximum element: $max, Positions: " . implode(", ", $max_positions) . "</p>";
?>

<table>
    <tr>
        <th></th>
        <th>Red</th>
        <th>Green</th>
        <th>Blue</th>
    </tr>
    <tr>
        <th>Light</th>
        <td>Light Red</td>
        <td>Light Green</td>
        <td>Light Blue</td>
    </tr>
    <tr>
        <th>Normal</th>
        <td>Normal Red</td>
        <td>Normal Green</td>
        <td>Normal Blue</td>
    </tr>
    <tr>
        <th>Dark</th>
        <td>Dark Red</td>
        <td>Dark Green</td>
        <td>Dark Blue</td>
    </tr>
</table>

</body>
</html>
