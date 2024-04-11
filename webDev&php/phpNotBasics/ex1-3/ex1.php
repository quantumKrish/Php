<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="exercise1.css" />
    <title>Topic 9 - Exercise 1</title>
</head>

<body>
    <?php
        $count =1;

        while ($count <=10){

            if ($count % 2 == 0) {

                echo ("<p> **** </p>");
                $count++;
                
            } else {

                echo ("<p> ++++++++</p>");
                $count++;
            }
        }
    ?>
</body>
</html> 