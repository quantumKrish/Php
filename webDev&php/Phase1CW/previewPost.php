
<?php
$Previewtitle = $_POST['title'];
$Previewcontent = $_POST['content'];
date_default_timezone_set('Europe/London');
$Previewdatetime = date("Y/m/d H:i:s");
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

        <div class="blog-entry">
            <div class="blog-datetime"><?php echo $Previewdatetime ?></div>
            <div class="blog-title"><?php echo $Previewtitle?></div>
            <div class="blog-content"><?php echo $Previewcontent?></div>
        </div>

</body>
</html>



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


    $sql = "SELECT * FROM BLOG";


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
    echo "<p>No blogs found</p>";
}
?>

<?php
$conn->close();
?>

