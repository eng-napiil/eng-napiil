<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<h1>QUEATION ONE</h1>";
$number = 15;  // Change this number to test with different values
function checkDivisibility($number) {
    if ($number % 3 == 0 && $number % 5 == 0) {
        return "The number $number is divisible by both 3 and 5.";
    } elseif ($number % 3 == 0) {
        return "The number $number is divisible by 3.";
    } elseif ($number % 5 == 0) {
        return "The number $number is divisible by 5.";
    } else {
        return "The number $number is divisible by neither 3 nor 5.";
    }
}
echo checkDivisibility($number);

?>

    
</body>
</html>