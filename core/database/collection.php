<?php

namespace database;

abstract class collection
{

    
    static public function create()
    {
        $model = new static::$modelName;
        return $model;
    }

    static public function findAll()
    {
        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName;
        return self::getResults($sql);
    }

    
    protected static function getResults($sql, $parameters = null) {


        if (!is_array($parameters)) {
            $parameters = (array) $parameters;

        }
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);


        $statement->execute($parameters);
        $class = static::$modelName;

        if ($statement->rowCount() > 0) {
            $statement->setFetchMode(\PDO::FETCH_CLASS, $class);
            $recordsSet = $statement->fetchAll();

        } else {
            $recordsSet = NULL;

        }

        return $recordsSet;
    }

    static public function findOne($id)
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

?>
