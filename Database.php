<?php

namespace dao;
class Database{
    private $productTable;
    private $catagoryTable;
    private $accessoryTable;
    private $tables = array();

    public function __construct()
    {
        $this->productTable = "";
        $this->catagoryTable = "";
        $this->accessoryTable= "";  
    }

    public function insertTable($name, $row) {
        if (!isset($this->tables[$name])) {
            $this->tables[$name] = array();
        }

        $this->tables[$name][] = $row;
    }

    public function selectTable($name, $where = null) {
        if (!isset($this->tables[$name])) {
            return array();
        }

        if ($where === null) {
            return $this->tables[$name];
        }

        $result = array();

        foreach ($this->tables[$name] as $row) {
            $match = true;

            foreach ($where as $key => $value) {
                if ($row[$key] !== $value) {
                    $match = false;
                    break;
                }
            }

            if ($match) {
                $result[] = $row;
            }
        }

        return $result;
    }

    public function updateTable($name, $row) {
        if (!isset($this->tables[$name])) {
            return;
        }

        foreach ($this->tables[$name] as &$existingRow) {
            if ($existingRow['id'] === $row['id']) {
                $existingRow = $row;
                break;
            }
        }
    }

    public function deleteTable($name, $row) {
        if (!isset($this->tables[$name])) {
            return;
        }

        foreach ($this->tables[$name] as $key => $existingRow) {
            if ($existingRow['id'] === $row['id']) {
                unset($this->tables[$name][$key]);
                break;
            }
        }
    }

    public function truncateTable($name) {
        unset($this->tables[$name]);
    }
}
    
   
