<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="ex5.css" />
    <title>Bulb Buyer checkout page</title>
</head>

<body>
    <?php

    $total = 0;
    $name = $_POST['name'];

    if (isset($_POST['bulb2'])) {
        $bulb2 = $_POST['bulb2'];
      } else {
        $bulb2 = "off";
      }

    if (isset($_POST['bulb1'])) {
        $bulb1 = $_POST['bulb1'];
      } else {
        $bulb1 = "off";
      }

    if (isset($_POST['bulb3'])) {
        $bulb3 = $_POST['bulb3'];
      } else {
        $bulb3 = "off";
      }

    if (isset($_POST['bulb4'])) {
        $bulb4 = $_POST['bulb4'];
      } else {
        $bulb4 = "off";
      }

    $batteries = $_POST['battery'];
    $payment = $_POST['payment'];

    if ($bulb1 == "on") {
        $total += 2.39;
    } 

    if ($bulb2 == "on") {
        $total += 4.29;
    }

    if ($bulb3 == "on") {
        $total += 3.95;
    }

    if ($bulb4 == "on") {
        $total += 7.49;
    }

    $total += $batteries * 10.42;

    echo "<p> Thank you for your purchase Ms or Mr $name </p>";

    echo "<table>";
    echo "<tr><th>Item</th><th>Quantity</th></tr>";

    if ($bulb1 == "on") {
        echo "<tr><td>Four 100-watt light bulbs for £2.39</td><td>1</td></tr>";
    }

    if ($bulb2 == "on") {
        echo "<tr><td>Eight 100-watt light bulbs for £4.29</td><td>1</td></tr>";
    }

    if ($bulb3 == "on") {
        echo "<tr><td>Four 100-watt long-life light bulbs for £3.95</td><td>1</td></tr>";
    }

    if ($bulb4 == "on") {
        echo "<tr><td>Eight 100-watt long-life light bulbs for £7.49</td><td>1</td></tr>";
    }

    if ($batteries > 0) {
        echo "<tr><td>Batteries for £10.42 each</td><td>$batteries</td></tr>";
    }

    echo "</table>";


    echo "<p> Total: £$total </p>";

    $total = $total * 1.2;
    echo "<p> Total: £$total + VAT</p>";

    echo "<p> Payment method: $payment </p>";


    ?>
</body>
</html> 