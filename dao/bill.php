<?php

class Dao_Bill extends Dao
{
    public function __construct(){
        parent::__construct();
        $this->TABLE = 'bill';
    }
    public function getBillList($num){
        $arrFields = [];
        $arrConds = [];
        $arrLimit = "{$num}";
        $arrOrder = ["editTime desc"];
        return $this->getListByConds($arrFields, $arrConds, $arrOrder, $arrLimit);
    }
	public function updateBill($arrConds, $arrFields){
		$res = $this->updateByConds($arrConds, $arrFields);
		return $res;
	}
	public function addBill($arrFields){
        $res = $this->insert($arrFields);
        return $res;
    }
}
