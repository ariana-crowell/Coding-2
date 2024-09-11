<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My First Website</h1>
    <form method="GET">
        <input type="text" name="person">
        <button>SUBMIT</button>
    </form>
    <?php
        //Used form to apply chosen name
       $name = $_GET['person'];
       //echo the name frome previous line and the string
       echo $name." Read this. ";
       //does the same as echo just takes longer
       print "I can't beelieve I got fired from the calendar factory. All I did was take a day off!";
    ?>
</body>
</html>