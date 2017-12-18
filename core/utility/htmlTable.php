<?php

namespace utility;


class htmlTable
{
    public static function genarateTableFromMultiArray($array)
    {

        $tableGen = '<table border="1"cellpadding="10">';
        $tableGen .= '<tr>';
        
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
        
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $heading) {
			if($heading != 'password')
            	$tableGen .= '<th>' . $heading . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($array as $record) {
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
				if($key == 'id') {
                    $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">View</a>&nbsp;<a href="index.php?page=' . $referingPage . '&action=edit&id=' . $value . '">Edit</a></td>';
                } elseif($key == 'isdone') {
                    $tableGen .= '<td>' . ($value?'Yes':'No').'</td>';
                } elseif($key != 'password') {
                    $tableGen .= '<td>' . $value . '</td>';
                }
            }
            $tableGen .= '</tr>';
        }

        $tableGen .= '</table>';

        return $tableGen;
    }

    public static function generateTableFromOneRecord($innerArray)
    {
        $tableGen = '<table border="1" cellpadding="10"><tr>';

        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
            $tableGen .= '<th>' . $innerRow . '</th>';
        }
        $tableGen .= '</tr>';

        foreach ($innerArray as $value) {
            $tableGen .= '<td>' . $value . '</td>';
        }

        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
}

?>