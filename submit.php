<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Submit Format</title>
    <style>
        body
        {
            height: 100%;
            background-color: #f2f2f2;
        }
        table {
            border-collapse: collapse;
            width: 35%;
            margin: 0 auto;
            margin-top:60px;
            box-shadow: ;
            background-color: #fff;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
        h2
        {
            margin-top: 80px;
            font-size: 40px;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <?php

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $number = $_REQUEST['number'];
    $DOB = $_REQUEST['DOB'];
    $gender = $_REQUEST['gender'];
    $Address = $_REQUEST['Address'];
    $city = $_REQUEST['city'];
    $region = $_REQUEST['region'];
    $code = $_REQUEST['code'];

    $host = 'localhost';
    $username = 'root';
    $pass = '';
    $db = 'mylearning';

    $conn = new mysqli($host,$username,$pass,$db);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

        $sql = "insert into userdata values (NULL,'$name','$email', '$number','$DOB','$gender','$Address','$city','$region','$code');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

    ?>


    <center>

    <h2>Complete Details</h2>
   </center>

    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>Number</td>
            <td><?php echo $number; ?></td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td><?php echo $DOB; ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo ucfirst($gender); ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $Address; ?></td>
        </tr>
        <tr>
            <td>City</td>
            <td><?php echo $city; ?></td>
        </tr>
        <tr>
            <td>Region</td>
            <td><?php echo $region; ?></td>
        </tr>
        <tr>
            <td>Code</td>
            <td><?php echo $code; ?></td>
        </tr>
    </table>


</body>
</html>
