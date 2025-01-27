<?php
$conn = new mysqli("localhost", "root", "punenexus123", "task");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $conn->real_escape_string($_POST['title']);
    $author = $conn->real_escape_string($_POST['author']);
    $publishdate = $conn->real_escape_string($_POST['publishdate']);

    $sql = "INSERT INTO book (title, author, publishdate) VALUES ('$title', '$author', '$publishdate')";
    if ($conn->query($sql) === TRUE) {
        echo "Book data saved successfully.";
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