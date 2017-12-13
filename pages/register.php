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

<body style="background-color:DodgerBlue;">

<h1>
<?php
//this how to print some data;
$config = Manage::config();
echo $config['site_name'];
?></h1>
<h2>Register</h2>

<form action="index.php?page=accounts&action=register" method="post">
<marquee><h1> SJP77 TODO TASK REGISTRATION WELCOME YOU</h1></marquee>
    First name: <input type="text" name="fname" placeholder="first name"required><br>
    Last name: <input type="text" name="lname"placeholder="lastname" required><br>
    Email or username: <input type="email" name="email" placeholder="username"required><br>
    Phone: <input type="tel" name="phone"placeholder="phone no" required><br>
    Birthday: <input type="text" name="birthday" placeholder="yyyy-mm-dd" required><br>
    Gender: <input type="radio" name="gender" value="male" checked="checked">Male <input type="radio" name="gender" value="female"> Female<br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Submit form">
</form>

<script src="js/scripts.js"></script>
</body>
</html>
