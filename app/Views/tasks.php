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
    </div>
</div>

<div class="container">
    <h1 class="page-title">Task List</h1>
    <p class="page-subtitle">View and manage all your tasks</p>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Date</th>
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