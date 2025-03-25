<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }
        header, footer {
            background-color: #007BFF;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.9);
        }
        .btn {
            display: block;
            width: 80%;
            margin: 10px auto;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <header>
        <h1>Event Management System</h1>
    </header>

    <div class="container">
        <h2>Welcome</h2>
        <p>Organize and Register for Events Easily</p>
        
        <a href="register.php" class="btn">Register</a>
        <a href="login.php" class="btn">Login</a>
        <a href="book_event.php" class="btn">Book Event</a>
        <a href="edit_event.php" class="btn">Edit Event</a>
    </div>

    <footer>
        <p>&copy; 2023 Event Management System</p>
    </footer>

</body>
</html>