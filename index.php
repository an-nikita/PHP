<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
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
    <div class="container">
        <h1>Welcome to the Data Management System</h1>
        <button onclick="window.location.href='employee_form.php'">Employee Form</button>
        <button onclick="window.location.href='book_form.php'">Book Form</button>
        <button onclick="window.location.href='display_data.php'">Display Data</button>
    </div>
</body>
</html>
