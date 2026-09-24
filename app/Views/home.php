<!DOCTYPE html>
<html>
<head>
    <title>Welcome - TANJ</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

<div class="header">
    <div class="logo">
        TANJ <span>User Management</span>
    </div>
    <div class="nav">
        <a href="<?= base_url('auth/login') ?>">Login</a>
        <a href="<?= base_url('auth/register') ?>">Create Account</a>
    </div>
</div>

<div class="container">

<div class="hero">
    <h1>Welcome to TANJ</h1>
    <p>Your Secure User Management System</p>
</div>

<div class="features">
    <div class="feature">
        <h3>🔐 Secure</h3>
        <p>Advanced security features to protect your data and user information.</p>
    </div>
    <div class="feature">
        <h3>👥 User Management</h3>
        <p>Easy-to-use admin panel for managing users and permissions.</p>
    </div>
    <div class="feature">
        <h3>⚡ Fast</h3>
        <p>Lightweight and efficient system built for optimal performance.</p>
    </div>
</div>

<div class="cta">
    <div class="cta-buttons">
        <a href="<?= base_url('auth/login') ?>" class="btn">Login</a>
        <a href="<?= base_url('auth/register') ?>" class="btn btn-secondary">Create Account</a>
    </div>
</div>

</div>

<div class="footer">
    © Jefferson Tan - TANJ Task Management System
</div>

</body>
</html>