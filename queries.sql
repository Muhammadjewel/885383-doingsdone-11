INSERT INTO users (email, name, password) VALUES ('batman@mail.ru', 'Batman', 'i-am-batman');
INSERT INTO users (email, name, password) VALUES ('superman@mail.ru', 'Superman', 'glasses');
INSERT INTO users (email, name, password) VALUES ('flash@mail.ru', 'Flash', 'faster-dan-oders');

INSERT INTO projects (name, user_id) VALUES('Входящие', 1);
INSERT INTO projects (name, user_id) VALUES('Учеба', 2);
INSERT INTO projects (name, user_id) VALUES('Работа', 2);
INSERT INTO projects (name, user_id) VALUES('Домашние дела', 3);
INSERT INTO projects (name, user_id) VALUES('Авто', 1);


INSERT INTO tasks (name, deadline, user_id, project_id, status) VALUES ('Собеседование в IT компании', '01.12.2019', 1, 3, 0);
INSERT INTO tasks (name, deadline, user_id, project_id, status) VALUES ('Выполнить тестовое задание', '25.12.2019', 1, 3, 0);
INSERT INTO tasks (name, deadline, user_id, project_id, status) VALUES ('Сделать задание первого раздела', '21.12.2019', 2, 2, 1);
INSERT INTO tasks (name, deadline, user_id, project_id, status) VALUES ('Встреча с другом', '26.12.2019', 2, 1, 0);
INSERT INTO tasks (name, deadline, user_id, project_id, status) VALUES ('Купить корм для кота', null, 3, 4, 0);
INSERT INTO tasks (name, deadline, user_id, project_id, status) VALUES ('Заказать пиццу', null, 3, 4, 0);

/* получить список из всех проектов для одного пользователя */
SELECT * FROM projects WHERE projects.user_id = 1;

/* получить список из всех задач для одного проекта */
SELECT * FROM tasks WHERE tasks.project_id = 4;

/* пометить задачу как выполненную */
UPDATE tasks SET status = 1 WHERE id = 1;

/* обновить название задачи по её идентификатору */
UPDATE tasks SET name = 'Хорошенько отдохнуть' WHERE id = 3;
