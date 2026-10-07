<!DOCTYPE html>
<html>
<head>
    <title>New Task - TANJ</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

<div class="header">
    <div class="logo">
        TANJ <span>New Task</span>
    </div>
    <div class="nav">
        <a href="/">Today</a>
        <a href="/tasks">All Tasks</a>
        <a href="/profile">Profile</a>
        <a href="/about">About</a>
        <a href="/logout">Logout</a>
    </div>
</div>

<div class="container">
    <h1 class="page-title">Create New Task</h1>
    <p class="page-subtitle">Add a new task to your list</p>

    <div class="card">
        <?php if (session()->getFlashdata('error')): ?>
            <div style="background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 4px; margin-bottom: 20px;">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')): ?>
            <div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 4px; margin-bottom: 20px;">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <form action="/tasks/create" method="post">
            <div class="form-group">
                <label for="title">Task Title *</label>
                <input type="text" name="title" id="title" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="pending">Pending</option>
                    <option value="in progress">In Progress</option>
                    <option value="completed">Completed</option>
                </select>
            </div>

            <div class="form-group">
                <label for="task_date">Task Date *</label>
                <input type="date" name="task_date" id="task_date" required>
            </div>

            <button type="submit" class="btn">Create Task</button>
            <a href="/tasks" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<div class="footer">
    © Jefferson Tan - TANJ Task Management System
</div>

</body>
</html>