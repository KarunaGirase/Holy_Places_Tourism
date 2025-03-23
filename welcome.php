<?php
session_start();

// If not logged in, redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #E9EBED;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('background login5.jpg')
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
            background-filter:blur(15px);
            background:rgba(255,255,255,0.2)
        }
        h2 {
            color: #41436a;
            margin-bottom: 20px;
            font-size: 24px;
        }
        p {
            color: black;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .welcome-btns {
            display: flex;
            justify-content: center; /* Updated to center align buttons */
            gap: 10px; /* Added gap property to reduce space */
            margin-top: 20px;
        }
        a {
            text-decoration: none;
            color: white;
            background-color: #79616f;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
            text-align: center;
            display: inline-block;
        }
        a:hover {
            background-color:rgb(171, 140, 158);
        }
        .logout-btn {
            background-color: #7e9680;
        }
        .logout-btn:hover {
            background-color:rgb(166, 198, 169);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <p>You are logged in. Now, you can explore further.</p>
        
        <div class="welcome-btns">
            <a href="holy_places.html">Explore Holy Places</a>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>
</body>
</html>
