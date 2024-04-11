

<!DOCTYPE html>
<html>

<head>
    <title>Ex 3</title>
    <link rel="stylesheet" href="ex2.css">
</head>

<body>

    <?php

    $i = 0;
    $total = 0;
    while ($i < 100) {
        $total += $i;
        $i++;
    }

    echo "<p> Total for while loop is: $total </p>";

    $total = 0;
    for ($i = 0; $i < 100; $i++) {
        $total += $i;
    }

    echo "<p> Total for for loop is: $total </p>";

    $total = 0;
    $i = 0;
    do {
        $total += $i;
        $i++;
    } while ($i < 100);

    echo "<p> Total for do while loop is: $total </p>";



    ?>


</body>


</html>