<?php
require_once('helpers.php');

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
