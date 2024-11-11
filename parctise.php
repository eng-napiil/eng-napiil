<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include Files in PHP</title>
    <style>
        hr {border: solid 2px brown;}
    </style>
</head>
<body>
    <h2>Include files in php using include and require statements</h2>
    <?php 
        echo ("<br>You can include files of type html or php in your code, just use include, include_once, require, or require_once");
        echo ("<hr>");
        require ("..index.php");
        echo ("<hr>");
        include_once ("assignment6.php");
        echo ("<hr>");
        include_once ("ch02.php");
        echo ("<hr>");
        include_once ("ch03.php");
        echo ("<hr>");
        include_once ("ch04.php");
        echo ("<hr>");
        include_once ("ch05.php");
        echo ("<hr>");
        // include_once ("ch06.php");
        include_once ("index.php");
        include_once ("index.php");
        echo ("<hr>");
        factorial (); //call factorail function with default argument
        $x = array (9, 8, 7, 6, 5, 4, 3, 2, 1);
        passingAndRerturningAnArray($x);
        staticVariable();
        if (function_exists('ca212'))
            ca212 ();
        else
            echo ("<br>Function <b>ca212</b> is not available, it is better to create it now");
        echo ("<hr>");
        include ("../ca213/path.php");
    ?>
</body>
</html>