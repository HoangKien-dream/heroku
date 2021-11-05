<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<table class="w3-table w3-bordered w3-striped w3-border test w3-hoverable">
    <tbody>
    <tr class="w3-green">
        <th>Roll Number</th>
        <th>Full Name</th>
        <th>Birthday</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Email</th>
    </tr>
    </tbody>
    <tbody>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php_db";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $gender = null;
            switch ($row["gender"]) {
                case 0;
                    $gender = "Nam";
                    break;
                case 1;
                    $gender = "Nữ";
                    break;
            }
            echo "<tr>" . "<td>" . $row["roll_number"] . "</td>" . "<td>" . $row["full_name"] . "</td>" . "<td>" . $row["birthday"] . "</td>" . "<td>" . $gender . "<td>" . $row["address"] . "<td>" . $row["email"] . "</td>" . "</tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
    </tbody>
</table>
</body>
</html>