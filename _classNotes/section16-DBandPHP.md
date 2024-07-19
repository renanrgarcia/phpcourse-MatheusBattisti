# DB and PHP
- Most commonly used is MySQL
- Most famous connection form is PDO(PHP Data Object), but exists MySQLi too. PDO is more flexible and focus on POO.

## Managing a DB
- `CREATE DATABASE db_name;`: creates a new database
- `DROP DATABASE db_name;`: deletes a database, but it can't be undone
- `USE db_name;`: selects a database to run queries

## Data types
- `INT`: integer
- `BIGINT`: integer with more range
- `VARCHAR`: string of 0 to 65535 characters
- `TEXT`: string with 65535 bytes maximum
- `DATE`: date on the format YYYY-MM-DD
- `TIMESTAMP`: date and time on the format YYYY-MM-DD HH:MM:SS

## Managing tables
- ```sql
  CREATE TABLE table_name (
    column_name1 data_type(length),
    column_name2 data_type
    );```: creates a new table
- `DROP TABLE table_name;`: deletes a table
- ```sql
  ALTER TABLE table_name 
  ADD/DROP/MODIFY column_name data_type;```: adds/removes/changes a column
- `RENAME TABLE table_name TO new_table_name;`: renames a table

### Constraints
- `column_name data_type CONSTRAINT1 CONSTRAINT2 CONSTRAINT3;`: adds a constraint to a column
- `column_name data_type NOT NULL`: adds a NOT NULL constraint to a column
  - To force not accept null values: `SET @@GLOBAL.SQL_MODE = 'STRICT_ALL_TABLES';`
- `column_name data_type UNIQUE`: adds a UNIQUE constraint to a column
- `column_name data_type PRIMARY KEY`: adds a PRIMARY KEY constraint to a column
  - Normally: `id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY`

## CRUD
- `INSERT INTO table_name (column1, column2, column3) VALUES (value1, value2, value3);`: inserts a new row
- `SELECT * FROM table_name;`: selects all rows or specific columns(`SELECT column1, column2 FROM table_name;`)
- Using WHERE: `SELECT columns FROM table_name WHERE column condition;` // example: `SELECT * FROM table_name WHERE id > 3;`
  - You can use AND, OR, NOT into the condition. Example: `SELECT * FROM table_name WHERE id > 3 AND name = 'John';`
- `UPDATE table_name SET column1 = value1, column2 = value2 WHERE column condition;`: updates a row
- `DELETE FROM table_name WHERE column condition;`: deletes a row

### Order by
- `SELECT column_name FROM table_name WHERE column condition ORDER BY column_name;`: orders by a column
  - It can be ASC or DESC

## Creating an user
- ```sql
  CREATE USER 'username'@'database_host' IDENTIFIED BY 'password'; 
  GRANT ALL PRIVILEGES ON *.* TO 'username'@'database_host';
  FLUSH PRIVILEGES; -- clear the cached privileges
  ```

## mySQLi x PDO
- mySQLi is faster, native to PHP
- PDO is more flexible and focus on POO. Is an API not limited to MySQL
- Both can be used on POO

## Connection with mySQLi
- mysqli_connect(): less used, not focus on POO
- `$conn = mysqli_connect('host', 'user', 'password', 'database');` // more used, focus on POO
  - On docker environment: `$conn = mysqli_connect('database_container', 'root', 'password', 'database_name');`
- To show the errors (it's common to use it in production, when the debug mode is off):  
  - ```php
      if($conn->connect_errno) {
        echo "Connection failed: " . mysqli_connect_error(); // or $conn->connect_error
      }
    ```

## Making queries
- ```php
  $sql = "SELECT * FROM table_name"; // any SQL query
  $result = $conn->query($sql);
  print_r($result);
  $conn->close(); // close the connection
  ```

## Create and delete tables
- ```php // create a table
  $sql = "CREATE TABLE table_name (
    column_name1 data_type(length),
    column_name2 data_type
    )";
  $conn->query($sql);
  ```
- ```php // delete a table
  $sql = "DROP TABLE table_name";
  $conn->query($sql);
  ```

## Inserting data
- ```php
  $sql = "INSERT INTO table_name (column1, column2, column3) VALUES (value1, value2, value3)"; // if using variables, scape "" with '' in the query
  $conn->query($sql);
  ```

## Selecting data
- ```php
  $sql = "SELECT * FROM table_name";
  $result = $conn->query($sql);
  $list = $result->fetch_all(MYSQLI_ASSOC); // list all rows
  $row = $result->fetch_assoc(); // list one row

  print_r($list);
  print_r($row);
  ```
