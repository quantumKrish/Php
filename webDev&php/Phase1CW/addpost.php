<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("Location: blog.php");

} else {
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" name="viewport" content="width=device-width"/>

    <title>Add Post</title>

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
        <h2> Add post </h2>
    </div>


    <div class="contact-form-container">
        <form id="form" action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">


            <label for="title">Title:</label>
            <input type="text" id="title" name="title" placeholder="Title" >


            <label for="content">Post Content:</label>
            <textarea id="content" name="content" rows="10"  maxlength="6000" placeholder="Content" ></textarea>

            <div class="buttons">
                <button type="submit" id="submit" value="Submit"> Post </button>
                <button id="clearButton" type="button">Clear Form</button>
                <button type="button" id="previewButton">Preview</button>
            </div>
        </form>

        <form id="previewForm" action="previewPost.php" method="post" style="display: none;">
            <input type="hidden" id="previewTitle" name="title">
            <input type="hidden" id="previewContent" name="content">

        </form>
    </div>


    <?php 


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        $title = $_POST['title'];
        $content = $_POST['content'];

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

            date_default_timezone_set('Europe/London');
            
            $title = $_POST['title'];
            $content = $_POST['content'];
            $datetime = date("Y/m/d H:i:s");    

        
            $sql = "INSERT INTO BLOG (title, content, datetime)
                    VALUES ('$title', '$content', '$datetime')";

            if ($conn->query($sql) === TRUE) {
    
                header("Location: myBlog.php");
    
            } else {
    
                // Redirect to the addpost page
                header("Location: addpost.php?error=" . urlencode($conn->error));

            }

            $conn->close();

        }

    }

    if (isset($_GET['error'])) {
        echo "Error: " . $_GET['error'];
    }

    ?>    

    <script src="http://localhost/Uni/webDev&php/Phase1CW/addpost.js"></script>

    <footer>

        <p> Kirishanth-P 2024 </p>
        <a href="https://www.linkedin.com/in/kirishanth-pirathapan-458256232/" target = "_blank"> <strong>&nbsp;My LinkedIn</strong>  </a>
    </footer>

</body>

</html>