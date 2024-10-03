<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<?php
    include_once 'includes/dbh.inc.php';
    include 'includes/header.php';
    $array = array("Ariana", "Alina", "Joshua", "Joshlynn", "Danielle");

    echo $array[0];
    
?>

</body>
</html>