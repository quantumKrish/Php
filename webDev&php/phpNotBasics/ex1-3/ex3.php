<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="exercise1.css" />
    <title>Topic 9 - Exercise 3</title>
</head>

<body>
    <?php
   
    $employee_salary = array("John" => 304283, "Doe" => 3283832, "Smith" => 2343);
    $names = array_keys($employee_salary);
    $salaries = array_values($employee_salary);
    
    foreach ($names as $x) {
        echo "$x <br>";
      }
    echo( "<br>");

    foreach ($salaries as $x) {
        echo "$x <br>";
      }
    echo( "<br><br>");


    sort($names);
    sort($salaries);

    foreach ($names as $x) {
        echo "$x <br>";
      }
      echo( "<br>");

    foreach ($salaries as $x) {
        echo "$x <br>";
      }


    ?>
</body>
</html> 