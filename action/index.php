<?php


class Action_Index extends Action
{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $objBill = new Dao_Bill();
        $billList = $objBill->getBillList(10);

        $this->_objView->assign('billList', $billList);
        $this->_objView->display("index.tpl");
    }

}