<?php
$conn = new mysqli("localhost", "root", "punenexus123", "task");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $birthdate = $conn->real_escape_string($_POST['birthdate']);

    $sql = "INSERT INTO employee (name, email, birthdate) VALUES ('$name', '$email', '$birthdate')";
    if ($conn->query($sql) === TRUE) {
        echo "Employee data saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<br>
<br>
<html>
    <head>
        <style>
             button {
            padding: 15px 30px;
            margin: 10px;
            font-size: 18px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
    button:hover {
            background-color: #45a049;
        }
        </style>
    </head>
<body>
    <button onclick="window.location.href='display_data.php'">Display Data</button>
</body>
    </html>