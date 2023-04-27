<?php

namespace entyti;

class Product{
    private $id;
    private $name;
    private $categoryID;
    public function __construct($id,$name,$categoryID){
        $this->id =$id;
        $this->name =$name;
        $this->categoryID =$categoryID;
    }

    function get_id() {
        return $this->id;
      }
    function get_name() {
        return $this->name;
    }
    function get_categoryID() {
        return $this->categoryID;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function set_categoryID($categoryID)
    {
        $this->categoryID = $categoryID;
    }

}
