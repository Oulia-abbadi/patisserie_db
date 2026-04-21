<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Grape+Nuts&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Delight Patisserie</title>
</head>
<body>
<header>
    <div class="logo">Patisserie</div>
    <nav class="nav-links">
        <a href="index.php">Home</a>
        
        <?php if(isset($_SESSION['user_id'])): ?>
            <a href="dashboard.php">My Account</a>
            <a href="logout.php" style="color: #ff5252; font-weight: bold;">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="register.php" style="color: #d81b60; font-weight: bold;">Register</a>
        <?php endif; ?>
    </nav>
</header>