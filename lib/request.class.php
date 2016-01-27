<?php
#处理请求参数，过滤危险
class Request{
	#尽量不用$_POST和$_GET
	public $POST;
	public $GET;
	public function __construct(){
		$this->POST = array();
		$this->GET = array();
	}
	#获取uri
	public function getRouter(){
        #默认controller
        $controller = 'index';
        if(isset($_GET['controller'])){
            $controller = $_GET['controller'];
        }
		$uri = strtolower($_SERVER['REQUEST_URI']);
		$routerArr = [
			'controller'=> $controller,
			'uri'=> $uri,
		];
		return $routerArr;
	}
	#过滤get,post数据
	public function getReqData(){
		$this->setOutputEncoding('utf-8');
		$this->escapeSqlString();

		$requestData = array(
			'POST'=> $this->POST,
			'GET'=> $this->GET,
		);
		return $requestData;
	}
	
	#防sql注入
	private function escapeSqlString(){
		if(!get_magic_quotes_gpc()){
			$this->POST = $this->_addSlashes($_POST);
			$this->GET = $this->_addSlashes($_GET);
		}
	}
	#设置页面输出编码
	private function setOutputEncoding($encode){
		header("Content-type: text/html; charset=$encode"); 
	}
	#加slash确保安全
	private function _addSlashes($data){
		foreach($data as $k=>$v){
			if(is_array($v)){
				$data[$k] = $this->_addSlashes($v);
			}else{
				$data[$k] = addslashes($v);
			}
		}
		return $data;
	}
}