<?php
$conn = new mysqli("localhost", "root", "punenexus123", "task");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h2>Employee Data</h2>";
$result = $conn->query("SELECT * FROM employee");
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Name</th><th>Email</th><th>Birthdate</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['birthdate']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "No employee data found.";
}

echo "<h2>Book Data</h2>";
$result = $conn->query("SELECT * FROM book");
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Title</th><th>Author</th><th>Publish Date</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['title']}</td><td>{$row['author']}</td><td>{$row['publishdate']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "No book data found.";
}

$conn->close();
?>

<style>
    table {
        width: 50%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table, th, td {
        border: 2px solid #ddd;
    }

    th, td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: grey;
    }


    .error-message {
        color: pink;
        font-size: 18px;
        margin-bottom: 20px;
    }
</style>

