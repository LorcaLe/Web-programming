<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function rectangleArea($width, $height) {
        $area = $width * $height;
        return "A rectangle of width $width and height $height has an area of $area.";
    }

    echo rectangleArea(5, 10);
    ?>

</body>
</html>