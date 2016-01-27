<?php

class Dao_Note extends Dao
{
    public function __construct(){
        parent::__construct();
        $this->TABLE = 'note';
    }
    public function getNoteList($num){
        $fieldArr = ['id', 'title', 'content', 'editTime', 'author', 'title'];
        $condArr = [];
        $limitArr = "{$num}";
        $orderArr = ["editTime desc"];
        return $this->getListByConds($fieldArr, $condArr, $orderArr, $limitArr);
    }
}
