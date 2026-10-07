<!DOCTYPE html>
<html>
<head>
    <title>About - TANJ</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

<div class="header">
    <div class="logo">
        TANJ <span>About</span>
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
    <h1 class="page-title">About TANJ</h1>
    <p class="page-subtitle">Learn more about our task management system</p>

    <div class="card">
        <h3>Tasks for Today Management System</h3>
        <p>
            This system was developed by Jefferson Tan using CodeIgniter 4 and MySQL.
            It provides a secure and efficient platform for managing daily tasks and user profiles.
        </p>
    </div>

    <div class="features">
        <div class="feature">
            <h3>🎯 Task Management</h3>
            <p>View today's tasks and manage your complete task list with ease.</p>
        </div>
        <div class="feature">
            <h3>👤 User Profiles</h3>
            <p>Secure user profile management with detailed information display.</p>
        </div>
        <div class="feature">
            <h3>🔒 Secure System</h3>
            <p>Built with security in mind using modern web development practices.</p>
        </div>
    </div>

    <div class="card">
        <h3>Technology Stack</h3>
        <div class="info-grid">
            <div class="info-item">
                <label>Framework</label>
                <div class="value">CodeIgniter 4</div>
            </div>
            <div class="info-item">
                <label>Database</label>
                <div class="value">MySQL</div>
            </div>
            <div class="info-item">
                <label>Language</label>
                <div class="value">PHP</div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    © Jefferson Tan - TANJ Task Management System
</div>

</body>
</html>