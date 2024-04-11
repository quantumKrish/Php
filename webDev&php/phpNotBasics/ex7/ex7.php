

<!DOCTYPE html>
<html>

<head>
    <title>Ex 6</title>
    <link rel="stylesheet" href="ex7.css">
</head>


<body>
    <div id = "container">
        <h1> Login </h1>
        

        <form id="form" action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">

            <input type="email" id="email" name="email" required placeholder="Email"><br><br>

            <input type="password" id="password" name="password" required placeholder="Password"><br><br>

            <input id="submit" type="submit" value="Sumbit">

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
      
      //validation and sanitisation features (dont have to add).
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $email = $conn->real_escape_string($_POST['email']);
        $password = $_POST['password']; 
      
       
        $sql = "SELECT email, password FROM USERS WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);
      
        if ($result->num_rows > 0) {

            session_start();
            $_SESSION['email'] = $email;
            if (!isset($_SESSION['email'])) {

            header("Location: ex7.php");

            } else {
                header("Location: welcome.php");
            }

        } else {
          echo "Invalid email or password.";
        }
      }
      
      $conn->close();
      
}

?>

    <script src="ex6.js"></script>

</body>


</html>