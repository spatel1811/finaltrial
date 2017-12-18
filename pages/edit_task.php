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
<h1><marquee>Edit Todos</marquee></h1>
<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>

<h2>Hi <?=$user_data->fname?></h2>
								


<form action="index.php?page=tasks&action=store&id=<?php echo $data->id; ?>" method="post">
	Title: <input type="text" name="title" id="title" value="<?php echo $data->title; ?>" required><br>
	Body: <textarea name="body" id="body" required><?php echo $data->body; ?></textarea><br>
	Is Done: <input type="checkbox" name="isdone" id="isdone" value="1" <?php if($data->isdone == '1'){echo 'checked="checked"';}?>><br>
	<input type="hidden" name="id" id="id" value="<?php echo $data->id; ?>">
    <input type="submit" value="Submit form">
</form>
<a href="index.php?page=tasks&action=all">Back</a>
<ul>
<li><a href="index.php?page=accounts&action=all">CLICK TO SHOW ACCOUNT</a>
</li>
<li><a href="index.php?page=tasks&action=all">CLICK TO SHOW TODOS</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>
<script src="js/scripts.js"></script>
</body>
</html>