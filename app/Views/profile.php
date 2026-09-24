<!DOCTYPE html>
<html>
<head>
    <title>Profile - TANJ</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

<div class="header">
    <div class="logo">
        TANJ <span>User Profile</span>
    </div>
    <div class="nav">
        <a href="/">Today</a>
        <a href="/tasks">All Tasks</a>
        <a href="/profile">Profile</a>
        <a href="/about">About</a>
    </div>
</div>

<div class="container">
    <h1 class="page-title">User Profile</h1>
    <p class="page-subtitle">View your account information</p>

    <div class="card">
        <div class="profile-header">
            <img src="/images/a3120913-b5ab-4cc9-8217-a413f7ea95b9.jpg" alt="Profile Picture" class="profile-avatar">
            <div class="profile-info">
                <h2><?= esc($user['full_name']) ?></h2>
                <p>Welcome back! Here's your profile information.</p>
            </div>
        </div>

        <div class="info-grid">
            <div class="info-item">
                <label>Username</label>
                <div class="value"><?= esc($user['username']) ?></div>
            </div>
            <div class="info-item">
                <label>Email Address</label>
                <div class="value"><?= esc($user['email']) ?></div>
            </div>
            <div class="info-item">
                <label>Member Since</label>
                <div class="value"><?= esc($user['created_at']) ?></div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    © Jefferson Tan - TANJ Task Management System
</div>

</body>
</html>