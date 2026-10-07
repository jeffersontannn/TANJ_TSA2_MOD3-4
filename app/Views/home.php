<!DOCTYPE html>
<html>
<head>
    <title>Welcome - TANJ</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

<div class="header">
    <div class="logo">
        TANJ <span>Task Management</span>
    </div>
    <div class="nav">
        <a href="/">Today</a>
        <a href="/tasks">All Tasks</a>
        <a href="/profile">Profile</a>
        <a href="/about">About</a>
        <?php if (session()->get('logged_in')): ?>
            <a href="/logout">Logout</a>
        <?php else: ?>
            <a href="/login">Login</a>
        <?php endif; ?>
    </div>
</div>

<div class="container">

<div class="hero">
    <h1>Welcome to TANJ</h1>
    <p>Your Secure Task Management System</p>
</div>

<div class="features">
    <div class="feature">
        <h3>� Task Management</h3>
        <p>Easily create, edit, and manage your daily tasks with our intuitive interface.</p>
    </div>
    <div class="feature">
        <h3>� Secure Authentication</h3>
        <p>Protected access to ensure your tasks and data remain private and secure.</p>
    </div>
    <div class="feature">
        <h3>⚡ Fast & Efficient</h3>
        <p>Lightweight system built for optimal performance and user experience.</p>
    </div>
</div>

<div class="cta">
    <div class="cta-buttons">
        <a href="/tasks" class="btn">View Tasks</a>
        <a href="/login" class="btn btn-secondary">Login</a>
    </div>
</div>

</div>

<div class="footer">
    © Jefferson Tan - TANJ Task Management System
</div>

</body>
</html>