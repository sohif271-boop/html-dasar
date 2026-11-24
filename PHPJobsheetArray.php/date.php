<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Date</h3>
    <?php
    date_default_timezone_set("asia/jakarta");
    echo date("h:i:sa");

    echo "Today is " . date("d/m/Y") . "<br>";
    echo "Today is " . date("d.m.Y") . "<br>";  
    echo "Today is"  . date("d-m") . "<br>";
    echo "today is"  . date(1);
    ?>
    
</body>
</html>