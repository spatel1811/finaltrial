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

<h1>Show Todos</h1>

<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>

<h1>Hi <?=$user_data->fname?></h1>
								
<ul>
<li><a href="index.php?page=accounts&action=all">My Account</a>
</li>
<li><a href="index.php?page=tasks&action=all">All Todos</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>

<h3>Title: <?php echo $data->title; ?></h3>
<h3>Body: <?php echo $data->body; ?></h3>
<h3>Is Done: <?php echo ($data->isdone == '1'?'Yes':'No'); ?></h3>
<h3>Create Date: <?php echo $data->createddate; ?></h3>
<h3>Update Date: <?php echo ($data->updateddate!='0000-00-00'?$data->updateddate:''); ?></h3>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>
<a href="index.php?page=tasks&action=all">Back</a>
<script src="js/scripts.js"></script>
</body>
</html>