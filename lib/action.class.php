<?php

abstract class Action
{
    public $REQUEST;
    protected $_objView;
    public function __construct(){
        $this->REQUEST = $this->getRequest();
        $this->_objView = new View();
    }


    protected function getRequest(){
        $objRequest = new Request();
        $requestData = $objRequest->getReqData();
        return $requestData;
    }
	
	abstract protected function setSubmitData();
	abstract protected function getColumnFilter();

    final public function filterColumn(){
        $submitData = $this->setSubmitData();
        $filter = $this->getColumnFilter();
        $res = Dao::filterColumn($submitData, $filter);
        if(true !== $res){
            throw new AcaciaException(AcaciaException::FILTER_COLUMN_FAIL, $res);
        }
		return $submitData;
    }

}
