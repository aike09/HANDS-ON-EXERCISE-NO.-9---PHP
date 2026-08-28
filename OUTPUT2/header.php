<?php
    // $page_title is set by each page before including this file
    if (!isset($page_title)) {
        $page_title = 'PHP Output No. 2';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
    <a class="brand" href="index.php">PHP Output No. 2</a>
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
        <a href="forgot-password.php">Forgot Password</a>
    </div>
</nav>