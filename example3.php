<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment3Q3</title>
</head>
<body>
<?php
// Declare the associative array
$colors = [
    "Light" => [
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ],
    "Normal" => [
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ],
    "Dark" => [
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    ]
];

// Print the array as a table
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th></th><th>Red</th><th>Green</th><th>Blue</th></tr>";

foreach ($colors as $rowName => $columns) {
    echo "<tr>";
    echo "<th>$rowName</th>";
    foreach ($columns as $columnName => $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>

