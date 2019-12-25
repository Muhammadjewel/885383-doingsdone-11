CREATE DATABASE doings_done
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;

USE doings_done;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  email VARCHAR(255) NOT NULL,
  name VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE projects (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  user_id INT NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE tasks (
  id INT AUTO_INCREMENT PRIMARY KEY,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  status INT DEFAULT 0,
  name VARCHAR(255) NOT NULL,
  file VARCHAR(255),
  deadline TIMESTAMP NOT NULL,
  user_id INT NOT NULL,
  project_id INT NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (project_id) REFERENCES projects(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE INDEX index_user_id ON users(id);
CREATE INDEX index_user_name ON users(name);
CREATE INDEX index_user_email ON users(email);
CREATE INDEX index_project_id ON projects(id);
CREATE INDEX index_project_name ON projects(name);
CREATE INDEX index_task_id ON tasks(id);
CREATE INDEX index_task_name ON tasks(name);
CREATE INDEX index_task_status ON tasks(status);
CREATE INDEX index_task_deadline ON tasks(deadline);
