<!DOCTYPE html>
<html>

<head>
    <title>Ex 6</title>
    <link rel="stylesheet" href="ex6.css">
</head>

<?php

    $servername = "localhost";
    $username = "Kirishanth";
    $password = "Renuja2006)))";
    $dbname = "ecs417";

    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Creates connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checks connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $sql = "INSERT INTO USERS (firstname, surname, email, password)
                VALUES ('$fname', '$sname', '$email', '$pass')";
                
        if ($conn->query($sql) === TRUE) {

            // Redirect to the login page
            $created = true;

        } else {

            echo "Error: " . $sql . "<br>" . $conn->error;
            $created = false;
        }
        $conn->close();

        }

?>






<body>

    <?php echo "<h1> Thank you $fname <h1>" ?> 

    <div id="container">

        <?php if ($created == true) { ?>

        <p> Your account has been created successfully. </p>

        <?php } else { ?>

        <p> There was an error creating your account. </p>

        <a href="ex6.html"> Click here to try again </a>

        <?php } ?>

    </div>

</body>


</html>