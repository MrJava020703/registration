<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User List Page</title>
    <style>
        table
        {
        
            margin-top: 20px;
        }
    </style>
</head>
<body>
<center>
    <h1>Selected Data from Insereted Data</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Address</th>
        <th>City</th>
        <th>Region</th>
        <th>Code</th>
    </tr>

    <?php
    $host = 'localhost';
    $username = 'root';
    $pass = '';
    $db = 'mylearning';

    $conn = new mysqli($host, $username, $pass, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM userdata";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["userid"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["number"] . "</td>";
            echo "<td>" . $row["DOB"] . "</td>";
            echo "<td>" . $row["gender"] . "</td>";
            echo "<td>" . $row["Address"] . "</td>";
            echo "<td>" . $row["city"] . "</td>";
            echo "<td>" . $row["region"] . "</td>";
            echo "<td>" . $row["code"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='10'>0 results</td></tr>";
    }

    $conn->close();
    ?>

</table>
</center>

</body>
</html>
