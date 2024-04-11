<!DOCTYPE html>
<html>

<head>
    <title>Ex 1</title>
    <link rel="stylesheet" href="ex1.css">
</head>

<body>
    <?php
        $salary1 = "£25,000";
        $salary2 = "£30,000";
        $salary3 = "£35,000";
    ?>


    <table>
        <figcaption>Employee Salaries</figcaption>
        <th>Name</th>
        <th>Salary</th>

        <tr>
            <td>John</td>
            <td><?php echo $salary1; ?></td>
        </tr>

        <tr>
            <td>Paul</td>
            <td><?php echo $salary2; ?></td>
        </tr>

        <tr>
            <td>George</td>
            <td><?php echo $salary3; ?></td>
        </tr>
    </table>

</body>
</html>