<?php 
include 'includes/header.php'; 
require 'config/db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if($user && password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: dashboard.php");
    } else {
        $error = "Invalid email or password!";
    }
}
?>


<div class="form-container">
    <div class="form-box">
        <h2>Welcome Back</h2>
        <?php if(isset($error)) echo "<p class='error-msg'>$error</p>"; ?>
        <?php if(isset($_GET['status'])) echo "<p class='success-msg'>Registration successful! Please login.</p>"; ?>
        <form method="POST">
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn-pink">Login</button>
        </form>
        <p class="form-footer-text">
            Don't have an account? <a href="register.php">Register now</a>
        </p>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
