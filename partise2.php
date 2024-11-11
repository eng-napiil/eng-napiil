<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 5 Practice</title>
</head>
<body>
    <h2>Chapter 5 Practice</h2>
    <?php
        // Declaring funtion in php using function keyword
        staticVariable();
        staticVariable();
        staticVariable();
        staticVariable();
        function factorial($f = 5) {
            //$f is a parameter holds the argument
            $fact = 1;
            $i = 2;
            while ($i <= $f) {
                $fact *= $i; //$fact = $fact * $i;
                $i++;
            }
            echo ("<br>Factorial of $f = $fact");
            // return 0;
        }
        // factorial(5); //5 is an argument
        // echo factorial(5);
        $b = 6;
        // $c = factorial($b);
        echo $c;
        $arr = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10,);
        // passing an array to function
        function passingAndRerturningAnArray ($x) {
            echo ("<br>Passed array elements are: ");
            for ($i = 0; $i < count($x); $i++) {
                echo ("$x[$i], ");
                $x[$i]++; //increment each element by 1
            }
            /* global $b;
            echo ("<br>Value of b = $b "); */
            echo ("<br>Value of variable b using GLOBALS = ". $GLOBALS['b']);
            return $x; //x is an array
        }
        $r = passingAndRerturningAnArray($arr);
        // print returned array elements 
        echo ("<br><br>Retured array elements are: ");
        foreach($r as $v)
            echo ("$v, ");
        // static variable means it has local scope and global live time
        function staticVariable () {
            static $a = 8; //a is a static variable means it retains its value in multiple calls
            echo ("<br>Value of variable a = $a");
            $a++;
        }
        staticVariable();
        staticVariable();
        staticVariable();
        staticVariable();
        staticVariable();
    ?>
</body>
</html>