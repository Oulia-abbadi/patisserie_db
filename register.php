<?php 
include 'includes/header.php'; 
require 'config/db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = htmlspecialchars($_POST['username']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?,?,?)");
    try {
        $stmt->execute([$username, $email, $pass]);
        header("Location: login.php?status=registered");
    } catch (Exception $e) {
        $error = "This email is already registered!";
    }
}
?>
<div class="form-container">
    <div class="form-box">
        <h2>Join Our Patisserie</h2>
        <?php if(isset($error)) echo "<p class='error-msg'>$error</p>"; ?>
        
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn-pink">Create Account</button>
        </form>
        <p class="form-footer-text">
            Already have an account? <a href="login.php">Login here</a>
        </p>
    </div>
</div>
<?php include 'includes/footer.php'; ?>