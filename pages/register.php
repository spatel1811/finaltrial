<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Todo Task Management</title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<h1>
<?php
//this how to print some data;
$config = Manage::config();
echo $config['site_name'];
?></h1>
<h2>Register</h2>

<form action="index.php?page=accounts&action=register" method="post">
    First name: <input type="text" name="fname" required><br>
    Last name: <input type="text" name="lname" required><br>
    Email: <input type="email" name="email" required><br>
    Phone: <input type="tel" name="phone" required><br>
    Birthday: <input type="text" name="birthday" placeholder="yyyy-mm-dd" required><br>
    Gender: <input type="radio" name="gender" value="male" checked="checked">Male <input type="radio" name="gender" value="female"> Female<br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Submit form">
</form>

<script src="js/scripts.js"></script>
</body>
</html>
