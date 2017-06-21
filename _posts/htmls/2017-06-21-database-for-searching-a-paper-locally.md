---
layout: post
title: Database for searching a paper stored in my computer
excerpt_separator: <!--more-->
category: htmls
comments: true
---
I always find it difficult to find a paper downloaded a while ago and  I don't want to pay for commercial software, so I made a page using MySQL database with a php interface.

<!--more-->
The final page looks like this:

![paper.php](https://github.com/yijunge/blog/blob/gh-pages/paper/paper.png)

First of all, to run a php file locally, use the command
```php
php -S localhost:8000 -t /path/to/root
```
Then type the following address in your web browser
```
http://localhost:8000/file.php
```
To connect to MySQL Database
```
mysql -u root -p
```


To create a user and grant privileges to the user
```
CREATE USER 'username@localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'username@localhost';
```
#### Some frequently used MySQL commands
|Usage|Command|
|-----|-------|
|show all databases|SHOW DATABASES;|
|create a database|CREATE DATABASE databasename;|
|use a database|USE databasename;|
|show all tables in a database|SHOW tables;|
|create a table|CREATE TABLE tablename(column1, column2);|
|show all columns|DESCRIBE tablename;|
|add a record| INSERT INTO tablename (column1,column2) VALUES(value for column1,value for column2);|
|delete a record| DELETE FROM tablename WHERE clause;|
|delete a table|DROP tablename;|
|add a column|ALTER TABLE tablename ADD COLUMN columnname datatype;|
|delete a column|ALTER TABLE tablename DROP COLUMN columnname;|
|find records|SELECT * FROM tablename WHERE clause;|
