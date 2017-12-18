<?php

class accounts extends \database\collection
{
    protected static $modelName = 'account';

    


    public static function findUserbyEmail($email)
    {

            $tableName = get_called_class();
            $sql = 'SELECT * FROM ' . $tableName . ' WHERE email = ?';

        
            $recordsSet = self::getResults($sql, $email);

            if (is_null($recordsSet)) {
                return FALSE;
            } else {
                return $recordsSet[0];
            }
    }
	

	public static function findUserbyId($id)
    {

            $tableName = get_called_class();
            $sql = 'SELECT * FROM ' . $tableName . ' WHERE id = ?';

        
            $recordsSet = self::getResults($sql, $id);

            if (is_null($recordsSet)) {
                return FALSE;
            } else {
                return $recordsSet[0];
            }
    }
}

