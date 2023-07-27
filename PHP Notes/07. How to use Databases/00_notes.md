# Databases

___

## What is a database?

A collection of related data in an organised format.

### What is DBMS?

DBMS (Database Management Systems) are software systems used to store, retrieve, and run queries on data. A DBMS serves as an interface between the user and the database, allowing users to create, read, update, and delete data in the database.

<u>__Examples:__</u> MySQL, PostgreSQL, Oracle Database, SQLite, MongoDB etc.

### What is MySQL database?

An open source relational database management system that is widely used for web applications and other online services. It is known for its speed, reliability and ease of use.

<u>__NOTE:__</u> SQL: Structured Query Language

![Database Table](https://github.com/rxi-prakharvrm/github-notes/blob/main/PHP%20Notes/07.%20How%20to%20use%20Databases/image.png?raw=true)

### What is phpmyadmin?

phpMyAdmin is a free and open-source web based application written in PHP that provides a graphical user interface for managing and administering MySQL and MariaDB databases. It allows users to interact with their databases through a web browser, making it easier to perform command database tasks without the need for direct command-line access.

### Creating a database in phpmyadmin

- Click on ```Databases``` tab
- Name your database (for example: ```LoginApp```)
- Click on ```create``` button
- Your database is created successfully. Now you can use it at left sidebar.

### Alternative way of creating databases

- Click on ```SQL``` tab
- Write the query ```CREATE DATABASE DATABASE_NAME```
- Click on ```Go``` button
- Your database is created successfully. Now you can use it at left sidebar.

### Delete the database

- Click on the ```HOME ICON``` at the left sidebar
- Click on the ```Databases``` tab
- Select the database that you want to delete
- Click on ```Drop``` button
- Your database is deleted successfully

### Creating tables and inserting data

- Click on the ```database``` that you created
- Name your table (for example: ```users```)
- Select the number of columns
- Click on ```Go``` button
- Now a new window will open. Here you can fill the columns with different values

### Designing Login Form

```login_makeup.php```

```php
<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username . "<br>" . $password;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mysql</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="col-sm-6 p-5">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input class="btn btn-primary mt-3" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
```

### Connecting to the database

```db_connection.php```

```php
<?php

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if ($connection) {
        echo "We are connected";
    } else {
        die("Database connection failed");
    }

    // if($username && $password) {
    //     echo $username;
    //     echo $password;    
    // } else {    
    //     echo "this field cannot be blank";    
    // }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mysql</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="col-sm-6 p-5">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input class="btn btn-primary mt-3" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
```

### Inserting data into database

```login_create.php```

```php
<?php

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if ($connection) {
        echo "We are connected";
    } else {
        die("Database connection failed");
    }

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Query Failed!");
    } else {
        echo "Data inserted successfully!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mysql</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="col-sm-6 p-5">
            <form action="login_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input class="btn btn-primary mt-3" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
```