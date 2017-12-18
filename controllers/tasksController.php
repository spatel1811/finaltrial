<?php

session_start();


class tasksController extends http\controller
{
    
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    
    public static function all()
    {
		
	    if(key_exists('userID',$_SESSION)) {
		   $userID = $_SESSION['userID'];
	    } else {
		   header("Location: index.php?page=accounts&action=all");
	    }
        $userID = $_SESSION['userID'];

        $records = todos::findTasksbyID($userID);
        
        self::getTemplate('all_tasks', $records);

    }
    
    public static function create()
    {
		$record = '';
         self::getTemplate('create_task', $record);
    }

    
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task', $record);

    }

    
    public static function store()
    {
        $record = todos::findOne($_REQUEST['id']);
		$record->title = $_REQUEST['title'];
        $record->body = $_REQUEST['body'];
		$record->isdone = ($_REQUEST['isdone']?$_REQUEST['isdone']:'no');
		$record->ownerid = $_SESSION['userID'];
		$record->createddate = date('Y-m-d');
		$record->updateddate = date('Y-m-d');
        $record->save();
        header("Location: index.php?page=tasks&action=edit&id=".$_REQUEST['id']);
    }

    public static function save() {
		$date = date('Y-m-d');
        $task = new todo();
		$task->title = $_REQUEST['title'];
        $task->body = $_POST['body'];
		$task->isdone = ($_REQUEST['isdone']?$_REQUEST['isdone']:'no');
        $task->ownerid = $_SESSION['userID'];
		$task->createddate = $date;
        $task->save();
		header("Location: index.php?page=tasks&action=all");
    }

    
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=tasks&action=all");

    }

}