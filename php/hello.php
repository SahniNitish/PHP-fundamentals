<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Set a greeting message
$greeting = "Hello, World!";
$currentTime = date('Y-m-d H:i:s');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hello Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .greeting {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .time {
            color: #7f8c8d;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="greeting">
            <?php echo $greeting; ?>
        </div>
        <div class="time">
            Current time: <?php echo $currentTime; ?>
        </div>
    </div>
</body>
</html>
