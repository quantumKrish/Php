

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="ex4.css">
</head>

<body>

    <?php

    include 'login-data.php';
    $emailSymbol = " ";
    $passwordSymbol = " ";

    ?>

<?php

$email = "  dsfjkn  ";
$password = "  ";

function isEmpty($str) {

    $str = trim($str);

    if ($str == "") {
        return true;
    } else {
        return false;
    }
}

?>

    <div id="white">

        <h1> Login </h1>

        <form> 

        <section>   
            <label for="email">Email: </label>
            <input type="text" id="email" name="email" required placeholder="Email">
            <br>
            <?php

        
                if (isEmpty($email)) {

                    $emailSymbol = "X";
                } else {

                    $emailSymbol = "tick";
                }


                echo "<p> $emailSymbol </p>";

            ?>
        </section>

        <section> 
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" required placeholder="Password">
            <br>
            <?php
            
                if (isEmpty($password)) {

                    $passwordSymbol = "X";
                } else {

                    $passwordSymbol = "tick";
                }

                echo "<p> $passwordSymbol </p>";

            ?>
         </section>

        <section>
            <label for="module">Module: </label>
            <select id="module" required>
                <option>ECS401</option>
                <option>ECS402</option>
                <option>ECS403</option>
                <option>ECS404</option>
                <option>ECS405</option>
                <option>ECS406</option>
            </select>
        <br>
        </section>

        <input type="submit" value="Submit">

        </form>




    </div>


</body>


</html>