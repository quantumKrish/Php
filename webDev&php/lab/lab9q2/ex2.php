

<!DOCTYPE html>
<html>

<head>
    <title>Ex 3</title>
    <link rel="stylesheet" href="ex2.css">
</head>

<body>

    <h1> My Birthday </h1>

    <?php 

    $name = $_POST['name'];
    $dob = $_POST['dob'];



    echo "<p> Hi $name, your birthday is on: </p> <span> $dob </span>";


    date_default_timezone_set('Europe/London'); 
    $today = date("Y-m-d");

    echo "<p> Today's date is: $today</p>";


    // Convert dates to timestamps
    $birthdayTimestamp = strtotime($dob);
    $currentTimestamp = strtotime($today);

    // Calculate difference
    $secondsDifference = $currentTimestamp - $birthdayTimestamp;
    $minutesDifference = $secondsDifference / 60;
    $hoursDifference = $minutesDifference / 60;
    $daysDifference = round($hoursDifference / 24);
    $weeksDifference = round($daysDifference / 7);
    $monthsDifference = round($daysDifference / 30);
    $yearsDifference = round($daysDifference / 365);


    echo "<p> Since your birth $secondsDifference seconds or, $minutesDifference minutes or, $hoursDifference hours
          or, $daysDifference days or, $weeksDifference weeks or, $monthsDifference months or, $yearsDifference years 
          have passed.  </p>";

    ?>

    <div>


    </div>


</body>


</html>