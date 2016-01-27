<?php


class Action_Bill extends Action
{
	public $ACTION;
    public function __construct(){
        parent::__construct();
		$this->ACTION = 'bill';
    }
    public function index(){
        $this->getBillList(10);
    }

    #笔记列表
    public function getBillList($pageNum){
        $objBill = new Dao_Bill();
        $billList = $objBill->getBillList(10);
        $this->_objView->assign('billList', $billList);
        $this->_objView->display("bill/list.tpl");
    }
    #添加页面
    public function addBill(){
        $this->_objView->display("bill/add.tpl");
    }
	#组织提交数据
    protected function setSubmitData(){
		$reqData = $this->REQUEST;
		$data = $reqData['POST'];
		$data['in'] = $data['out'] = 0;
		$data[$data['type']] = $data['money'];
		$data['editTime'] = time();
		$data['accountId'] = 1;
		unset($data['money']);
		unset($data['type']);
		//Common::dump($data);
		return $data;
	}	
	#获取列过滤
	protected function getColumnFilter(){
        $filter = Common::loadDaoConf($this->ACTION);
        return $filter;
    }

    #提交笔记
    public function submitBill(){
		$data = $this->filterColumn();
		$objBill = new Dao_Bill();
		if(empty($data['id'])){
			unset($data['id']);
			$res = $objBill->addBill($data);
		}else{
			$arrConds = [
				'id'=> $data['id'],
			];
			unset($data['id']);
			$res = $objBill->updateBill($arrConds, $data);
		}
		if($res){
			$this->getBillList(10);
		}else{
			$this->_objView->assign('info', '提交失败,请重试.'.$objBill->getLastSql());
			$this->_objView->display("error.tpl");	
		}
    }
}
