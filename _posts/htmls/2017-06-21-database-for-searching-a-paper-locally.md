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

<img src="https://github.com/yijunge/blog/blob/gh-pages/paper/paper.png"></imag>

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

<table>
  <thead>
    <tr>
      <td>Usage</td>
      <td>Command</td>
    </tr>
  </thead>
<tbody>
  <tr>
    <td>show all databases </td>
    <td> SHOW DATABASES; </td>
  </tr>
  <tr>
    <td>create a database </td>
    <td>CREATE DATABASE databasename; </td>
  </tr>
  <tr>
    <td>use a database </td>
    <td>USE databasename; </td>
  </tr>
  <tr>
    <td>show all tables in a database </td>
    <td>SHOW tables; </td>
  </tr>
  <tr>
    <td> create a table</td>
    <td> CREATE TABLE tablename(column1, column2);</td>
  </tr>
  <tr>
    <td> show all columns</td>
    <td> DESCRIBE tablename;</td>
  </tr>
  <tr>
    <td> add a record</td>
    <td> INSERT INTO tablename (column1,column2) VALUES(value for column1,value for column2);</td>
  </tr>
  <tr>
    <td>delete a record </td>
    <td>DELETE FROM tablename WHERE clause; </td>
  </tr>
  <tr>
    <td> delete a table</td>
    <td> DROP tablename;</td>
  </tr>
  <tr>
    <td> add a column</td>
    <td> ALTER TABLE tablename ADD COLUMN columnname datatype;</td>
  </tr>
  <tr>
    <td> delete a column</td>
    <td>ALTER TABLE tablename DROP COLUMN columnname; </td>
  </tr>
  <tr>
    <td>find records </td>
    <td> SELECT * FROM tablename WHERE clause;</td>
  </tr>
</tbody>
</table>
