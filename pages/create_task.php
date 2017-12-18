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
<h1>YOU CAN ADD TODO TASK HERE</h1>

<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>

<h1>Hi <?=$user_data->fname?></h1>
								


<form action="index.php?page=tasks&action=save" method="post">
	Title: <input type="text" name="title" id="title" required><br>
	Body: <textarea name="body" id="body" required></textarea><br>
	Is Done: <input type="checkbox" name="isdone" id="isdone" value="1"><br>
    <input type="submit" value="Submit form">
</form>
<a href="index.php?page=tasks&action=all">Back</a>
<ul>
<li><a href="index.php?page=accounts&action=all">CLICK TO DISPLAY ACCOUNT</a>
</li>
<li><a href="index.php?page=tasks&action=all">CLICK TO SHOW ALL TODOS</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>
<script src="js/scripts.js"></script>
</body>
</html>