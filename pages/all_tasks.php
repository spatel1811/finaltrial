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
<h2><marquee>TODO DISPLAY</marquee></h2>

<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID); ?>

<h3>Hi <?=$user_data->fname?></h3>



<?php

if(!empty($data)) {
	print utility\htmlTable::genarateTableFromMultiArray($data);
} else {
	echo 'Data not found';
}
?>
<ul>
<li><a href="index.php?page=accounts&action=all">CLICK TO GO TO ACCOUNTS</a>
</li>
<li><a href="index.php?page=tasks&action=create">CLICK TO ADD TODOS</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">LOGOUT</a>
</li>
</ul>

<script src="js/scripts.js"></script>
</body>
</html>