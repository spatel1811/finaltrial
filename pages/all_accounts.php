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
<h2>WELCOME TO YOUR ACCOUNT</h2>
<h2> I AM GLAD YOU ARE HERE</H2>

<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>

<h1>Hi <?=$user_data->fname?></h1>
								


<?php
//this is how you print something
print utility\htmlTable::genarateTableFromMultiArray($data);
?>

<ul>
<li><a href="index.php?page=tasks&action=all">Todos</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>

<script src="js/scripts.js"></script>
</body>
</html>