<?php
#异常类
class AcaciaException extends Exception{
	const FILTER_COLUMN_FAIL = 1;
	private $data;
	public function __construct($errNo, $errData){
		$this->code = $errNo;
		$this->data = $errData;
		$this->message = $this->getErrMsg();
	}
	public function getErrColumnFilterMsg($col, $type){
		$msg = "{$col}字段错误,";
		if('null' == $type){
			$extra = "不能为空.";
		}else{
			$extra = "应为{$type}类型.";
		}
		$msg .= $extra;
		return $msg;
	}
	public function getErrMsg(){
		switch($this->code){
			case self::FILTER_COLUMN_FAIL:
				$msg = $this->getErrColumnFilterMsg($this->data['err_col'], $this->data['err_type']);
				break;
			default:
				$msg = "Unknown Error.";
				break;
		}
		return $msg;
	}
}
