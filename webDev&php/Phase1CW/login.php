<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" name="viewport" content="width=device-width"/>

    <title>Login Page</title>

    <!-- CSS for desktop -->
    <link rel="stylesheet" type="text/css" href="css/desktop.css" media="screen and (min-width: 769px)">

    <!-- CSS for mobile -->
    <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width: 768px)">
</head>



<body>


    <header>

        <span class="colored-panel-name"></span>
        <h1> Krish.P</h1>

        <span class="colored-panel-links"></span>
        <nav>
            <ul>
                <li> <a href="homepage.html"> Bio</a> </li>
                <li> <a href="projects.html"> Projects</a>
                <li> <a href="blog.php"> Blog </a> </li>
                <li> <a href="experience.html"> Experience </a> </li>                
                <li> <a href="skills.html"> Skills </a> </li>
                <li> <a href="education.html"> Education </a> </li>
            </ul>
        </nav>

    </header>

    <div>
        <span class="colored-panel-title"></span>
        <h2> Log in </h2>
    </div>


    <div class="contact-form-container">
        <form id="form" action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="password">Password:</label>
            <input type="text" id="password" name="password">

            <div class="buttons">
                <button type="submit" id="submit" value="Submit"> Submit </button>
                <button type="button" id="clear"onclick="clearForm()">Clear Form</button>
            </div>
        </form>
    </div>

    <?php 


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        $email = $_POST['email'];
        $pass = $_POST['password'];

        $servername = "localhost";
        $username = "Kirishanth";
        $password = "Renuja2006)))";
        $dbname = "ecs417";


        // Creates connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $email = ($_POST['email']);
            $password = $_POST['password']; 
        
        
            $sql = "SELECT email, password FROM USERS WHERE email = '$email' AND password = '$password'";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {

                session_start();
                $_SESSION['email'] = $email;
                
                if (!isset($_SESSION['email'])) {

                header("Location: login.php");

                } else {
                    header("Location: addpost.php");
                }

            } else {

                // add password or email invalid message
            }
        }
        
        $conn->close();
      
    }

    ?>    
    
    <script src="http://localhost/Uni/webDev&php/Phase1CW/login.js"></script>



    <footer>

        <p> Kirishanth-P 2024 </p>
        <a href="https://www.linkedin.com/in/kirishanth-pirathapan-458256232/" target = "_blank"> <strong>&nbsp;My LinkedIn</strong>  </a>
    </footer>

</body>