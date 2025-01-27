<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Form</title>
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
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 400px;
            text-align: center;
        }
        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        label {
            font-size: 18px;
            color: #555;
            margin-bottom: 8px;
            display: block;
            text-align: left;
        }
        input[type="text"], input[type="email"], input[type="date"] {
            width: 80%;
            padding: 12px;
            margin: 8px 0 20px;
            border: 2px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 80%;
            padding: 12px;
            background-color: grey;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: green;
        }
    </style>
    </style>
</head>
<body>
    <div class="container">
        <h2>Book Form</h2>
        <form action="save_book.php" method="POST">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" required>
            
            <label for="author">Author</label>
            <input type="text" id="author" name="author" required>

            <label for="publishdate">Publish Date</label>
            <input type="date" id="publishdate" name="publishdate" required>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
