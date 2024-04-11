<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="exercise1.css" />
    <title>Topic 9 ex 2</title>
</head>

<body>
    <?php
        $numArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        $length = count($numArray);
        $sum = 0;
        $middleIndex = $length/2;

        echo("<p> Median: $numArray[$middleIndex] </p>");


        for ($i=0; $i<$length; $i++){

            $sum += $numArray[$i];

        }

        $average = $sum/$length;

        echo("<p> Average: $average </p>");
    ?>
</body>
</html> 