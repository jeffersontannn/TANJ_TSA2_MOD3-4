<!DOCTYPE html>
<html>
<head>
    <title>Task List - TANJ</title>
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
    <h1 class="page-title">Task List</h1>
    <p class="page-subtitle">View and manage all your tasks</p>

    <?php if (session()->get('logged_in')): ?>
        <div class="cta mb-20">
            <a href="/tasks/new" class="btn">Create New Task</a>
        </div>
    <?php endif; ?>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Date</th>
                    <?php if (session()->get('logged_in')): ?>
                        <th>Actions</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= esc($task['id']) ?></td>
                        <td><?= esc($task['title']) ?></td>
                        <td>
                            <?php 
                                $statusClass = 'status-pending';
                                if (strtolower($task['status']) === 'completed') {
                                    $statusClass = 'status-completed';
                                } elseif (strtolower($task['status']) === 'in progress') {
                                    $statusClass = 'status-in-progress';
                                }
                            ?>
                            <span class="status-badge <?= $statusClass ?>"><?= esc($task['status']) ?></span>
                        </td>
                        <td><?= esc($task['task_date']) ?></td>
                        <?php if (session()->get('logged_in')): ?>
                            <td>
                                <a href="/tasks/edit/<?= $task['id'] ?>" class="btn btn-primary" style="padding: 8px 16px; font-size: 12px;">Edit</a>
                                <form action="/tasks/delete/<?= $task['id'] ?>" method="post" style="display: inline;">
                                    <button type="submit" class="btn" style="padding: 8px 16px; font-size: 12px; background-color: #e74c3c;" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                                </form>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="footer">
    © Jefferson Tan - TANJ Task Management System
</div>

</body>
</html>