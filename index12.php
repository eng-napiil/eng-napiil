<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment3Q1</title>
</head>
<body>
<?php
function binaryToDecimal($binary) {
    $decimal = 0;
    $length = strlen($binary);
    for ($i = 0; $i < $length; $i++) {
        $decimal = $decimal * 2 + ($binary[$i] == '1' ? 1 : 0);
    }
    return $decimal;
}

function decimalToOctal($decimal) {
    $octal = '';
    while ($decimal > 0) {
        $octal = ($decimal % 8) . $octal;
        $decimal = intdiv($decimal, 8);
    }
    return $octal === '' ? '0' : $octal;
}

function decimalToHexadecimal($decimal) {
    $hexadecimal = '';
    $hexChars = '0123456789ABCDEF';
    while ($decimal > 0) {
        $hexadecimal = $hexChars[$decimal % 16] . $hexadecimal;
        $decimal = intdiv($decimal, 16);
    }
    return $hexadecimal === '' ? '0' : $hexadecimal;
}

// Example usage
$binary = '1101'; // Binary input
$decimal = binaryToDecimal($binary);
$octal = decimalToOctal($decimal);
$hexadecimal = decimalToHexadecimal($decimal);

echo "Binary: $binary\n";
echo "Decimal: $decimal\n";
echo "Octal: $octal\n";
echo "Hexadecimal: $hexadecimal\n";
?>
</body>
</html>

