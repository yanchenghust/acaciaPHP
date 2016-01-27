<?php


class Action_Note extends Action
{
    public function __construct(){
        parent::__construct();
    }
    function index(){

    }

    #笔记列表
    function getNoteList($pageNum){

        $objNote = new Dao_Note();
        $noteList = $objNote->getNoteList(10);

        $this->_objView->assign('note/noteList', $noteList);
        $this->_objView->display("note/notelist.tpl");
    }
}
