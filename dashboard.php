<?php 
include 'includes/header.php'; 
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
?>
<div class="dashboard-wrapper">
    <div class="dash-hero">
        <h1>Welcome Back, <?php echo htmlspecialchars($_SESSION['username']); ?>! ✨</h1>
        <p>Ready for another sweet treat today?</p>
    </div>

    <div class="dash-grid">
        <div class="dash-item">
            <div class="dash-icon">🧁</div>
            <h3>My Orders</h3>
            <p>You haven't placed any orders yet.</p>
            <a href="index.php" class="dash-link">Go to Shop</a>
        </div>
        <div class="dash-item featured">
            <div class="dash-icon">🎁</div>
            <h3>Loyalty Points</h3>
            <div class="points-num">150 <span>pts</span></div>
            <p>Order more to unlock rewards!</p>
        </div>
        <div class="dash-item">
            <div class="dash-icon">⚙️</div>
            <h3>Account Settings</h3>
            <p>Update your profile and password.</p>
            <a href="#" class="dash-link">Edit Profile</a>
        </div>
    </div>
    <div class="dash-action">
        <a href="logout.php" class="btn-logout">Logout from Account</a>
    </div>
</div>
<?php include 'includes/footer.php'; ?>