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

$config = Manage::config();
echo $config['site_name'];
?></h1>
<h2>Login</h2>

<form action="index.php?page=accounts&action=login" method="POST">
<marquee><h1>LOGIN PAGE OF SJP77 WELCOMES YOU</h1></marquee>
    <div class="container">
        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>
</form>
<h1><a href="index.php?page=accounts&action=register">Register</a></h1>

<script src="js/scripts.js"></script>
</body>
</html>