<?php
require_once('helpers.php');
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
