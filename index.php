<?php
require_once('helpers.php');
$show_complete_tasks = rand(0, 1);
$projects = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];
$tasks = [
    [
        'name' => 'Собеседование в IT компании',
        'completion_date' => '01.12.2019',
        'category' => 'Работа',
        'completed' => false
    ],
    [
        'name' => 'Выполнить тестовое задание',
        'completion_date' => '25.12.2019',
        'category' => 'Работа',
        'completed' => false
    ],
    [
        'name' => 'Сделать задание первого раздела',
        'completion_date' => '21.12.2019',
        'category' => 'Учеба',
        'completed' => true
    ],
    [
        'name' => 'Встреча с другом',
        'completion_date' => '22.12.2019',
        'category' => 'Входящие',
        'completed' => false
    ],
    [
        'name' => 'Купить корм для кота',
        'completion_date' => 'null',
        'category' => 'Домашние дела',
        'completed' => false
    ],
    [
        'name' => 'Заказать пиццу',
        'completion_date' => 'null',
        'category' => 'Домашние дела',
        'completed' => false
    ]
];

function showProjectTasksCount ($tasks, $projectName) {
    $result = 0;
    foreach ($tasks as $task) {
        if ($task['category'] == $projectName) {
            $result++;
        }
    }
    return $result;
}

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
