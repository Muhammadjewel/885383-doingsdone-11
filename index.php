<?php
require_once('helpers.php');

$currentUserId = 1;
$getProjectsSql = 'SELECT * FROM projects WHERE projects.user_id = ?';
$projects = dbFetchData($connection, $getProjectsSql, [$currentUserId]);
$getTasksSql = 'SELECT * FROM tasks WHERE tasks.user_id = ?';
$tasks = dbFetchData($connection, $getTasksSql, [$currentUserId]);
var_dump($projects, $tasks);

$pageContent = include_template('main.php', [
    'projects' => $projects,
    'tasks' => $tasks,
    'show_complete_tasks' => $show_complete_tasks
]);
$layoutContent = include_template('layout.php', [
    'pageContent' => $pageContent,
    'username' => 'Muhammadjavohir',
    'pageTitle' => 'Дела в порядке',
]);
print($layoutContent);
