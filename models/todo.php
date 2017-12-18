<?php

final class todo extends database\model
{
    public $id;
   
    public $ownerid;
    public $createddate;
	public $updateddate;
   
    public $isdone;
    protected static $modelName = 'todo';

    public static function getTablename()
    {

        $tableName = 'todos';
        return $tableName;
    }
}

?>
