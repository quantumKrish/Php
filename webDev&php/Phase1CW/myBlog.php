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
    <title>My blog</title>
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
        <h2> Blog </h2>
    </div>

    <div>
        <span class="colored-panel-login"></span>
        <h3 id="login"> <a href="logout.php">Logout</a></h3>
    </div>

    <div>
        <span class="colored-panel-addpostblog"></span>
        <h3 id="login"> <a href="addpost.php">Addpost</a></h3>
    </div>


    <div id="sort">    
        <span class="colored-panel-sort"></span>

        <form action="myBlog.php" method="get">
        <label for="month">Sort by month:</label>
        <select id="month" name="month">
            <option value="0">All</option>
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
            </select>

            <button type="submit" id="filter">Filter</button>
            <br>
        </form>

    </div>


    <?php

    $servername = "localhost";
    $username = "Kirishanth";
    $password = "Renuja2006)))";
    $dbname = "ecs417";

    // Creates connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if a specific month is selected for sorting
    $selectedMonth = isset($_GET['month']) ? $_GET['month'] : null;

    // Build SQL query based on selected month
    if (!empty($selectedMonth) && $selectedMonth !== '0') {
        // Wrap $selectedMonth in quotes since it's a string value
        $sql = "SELECT * FROM BLOG WHERE MONTH(datetime) = '$selectedMonth'";
    } else {
        $sql = "SELECT * FROM BLOG"; // Retrieve all blogs if no specific month is selected
    }

    $result = $conn->query($sql);

    $blogs = array();

    if ($result->num_rows > 0) {
        // Store each blog in an array
        while ($row = $result->fetch_assoc()) {
            $blogs[] = $row;
        }
    }

    // Sort blogs based on datetime in descending order
    usort($blogs, function ($a, $b) {
        return strtotime($b['datetime']) - strtotime($a['datetime']);
    });
    ?>

    <?php
    if (!empty($blogs)) {
        // Output data of each blog
        foreach ($blogs as $blog) {
    ?>
            <div class="blog-entry">
                <div class="blog-datetime"><?php echo $blog["datetime"]; ?></div>
                <div class="blog-title"><?php echo $blog["title"]; ?></div>
                <div class="blog-content"><?php echo $blog["content"]; ?></div>
            </div>
    <?php
        }
    } else {
        echo"<br>";
        echo"<br>";

        echo "<p>No blogs found</p>";
        
        echo"<br>";
        echo"<br>";
    }
    ?>

    <?php
    $conn->close();
    ?>




    <script src="http://localhost/Uni/webDev&php/Phase1CW/addpost.js"></script>

    <footer>

        <p> Kirishanth-P 2024 </p>
        <a href="https://www.linkedin.com/in/kirishanth-pirathapan-458256232/" target = "_blank"> <strong>&nbsp;My LinkedIn</strong>  </a>
    </footer>
</body>

</html>