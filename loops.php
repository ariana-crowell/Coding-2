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
        include_once 'includes/dbh.inc.php';
        //Loop

        //While Loop
        $x = 1;
        while ($x <= 5) {
            echo "Hi there<br>";
            $x++;
        }
        //Do while loop
        $x = 1;
        do {
           echo "Hey<br>";
            $x++; 
        }
        while ($x <= 5);
        //For loop
        for ($x = 1; $x <= 10; $x++) {
            echo "Hi<br>";
        }
        //Foreach loop
        $array = array("Ariana", "Alina", "Joshua", "Joshlynn", "Danielle");

        foreach ($array as $loopdata) {
            echo "My name is ".$loopdata."<br>";

        }
    

    ?>

</body>
</html>