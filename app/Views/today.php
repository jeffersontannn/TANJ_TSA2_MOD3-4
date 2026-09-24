<!DOCTYPE html>
<html>
<head>
    <title>Today's Tasks - TANJ</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

<div class="header">
    <div class="logo">
        TANJ <span>Today's Tasks</span>
    </div>
    <div class="nav">
        <a href="/">Today</a>
        <a href="/tasks">All Tasks</a>
        <a href="/profile">Profile</a>
        <a href="/about">About</a>
    </div>
</div>

<div class="container">
    <h1 class="page-title">Today's Tasks</h1>
    <p class="page-subtitle">Tasks scheduled for <?= date('F j, Y') ?></p>

    <?php if (empty($tasks)): ?>
        <div class="card">
            <div class="text-center">
                <h3>No tasks for today</h3>
                <p>You have no tasks scheduled for today. Enjoy your free time!</p>
                <div class="mt-20">
                    <a href="/tasks" class="btn">View All Tasks</a>
                </div>
            </div>
        </div>
    <?php else: ?>
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

        <div class="cta mt-40">
            <a href="/tasks" class="btn btn-secondary">View All Tasks</a>
        </div>
    <?php endif; ?>
</div>

<div class="footer">
    © Jefferson Tan - TANJ Task Management System
</div>

</body>
</html>