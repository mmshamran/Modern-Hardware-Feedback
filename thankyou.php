<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"> <!-- Poppins Font -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: black;
            color: white;
        }
        .thankyou-container {
            text-align: center;
        }
        .thankyou-message {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .return-btn {
            background-color: orange;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }
        .return-btn:hover {
            background-color: #c50000;
        }
    </style>
</head>
<body>
    <div class="thankyou-container">
        <h1 class="thankyou-message">Thank you for your feedback!</h1>
        <a href="index.php" class="return-btn">Return to Feedback Page</a>
    </div>
</body>
</html>