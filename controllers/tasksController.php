<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */
session_start();

//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task
    public static function all()
    {
		//By IPE TEAM
        //$records = todos::findAll();
	    if(key_exists('userID',$_SESSION)) {
		   $userID = $_SESSION['userID'];
	    } else {
		   header("Location: index.php?page=accounts&action=all");
	    }
        $userID = $_SESSION['userID'];

        $records = todos::findTasksbyID($userID);
        
        self::getTemplate('all_tasks', $records);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    public static function create()
    {
		$record = '';
         self::getTemplate('create_task', $record);
    }

    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task', $record);

    }

    //this would be for the post for sending the task edit form
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

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=tasks&action=all");

    }

}