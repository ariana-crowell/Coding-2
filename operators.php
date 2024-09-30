<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
        include 'includes/header.php';
        include_once 'includes/connection.php';
       //Arithmetic Operators
    echo 5**2;
    echo "<br>";
   //Assignment Operators
   $x = 14;
   $x += 20;
   echo $x;
   echo "<br>";
    //Comparison Operators
    $x = 10;
    $y = 10;

    if ($x >= $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }
    echo "<br>";
    //Increment/Decrement Operators
    $x = 14;
    echo $x--;
    echo $x;
    echo "<br>";
    //Logical Operators
    $x = 14;
    $y = 10;

    if ($x == $y xor 1 == 1) {
        echo "True";
    }
    
    ?>
</body>
</html>