<?php
#通用功能类
class Common{
	public function __construsct(){
		
	}
	#打印数据
	public static function dump($data){
		$divStyle = 'background:#eee;color:#000;width:100%;';
		$div1 = "<div style='$divStyle'><pre>";
		$div2 = "</pre></div>";
		echo $div1;
		var_dump($data);
		echo $div2;

	}
	#加载配置
	public static function loadConf($type){
		if(is_array($type)){
			$module = $type['module'];
			$item = $type['item'];
		}
		$confPath = WEBROOT . "/conf/$module.conf.php";
		if(!file_exists($confPath)){
			throw new Exception("conf load error. file: $confPath");
		}
		$conf = require($confPath);
		return $conf[$item];
	}
	#加载dao配置
	public static function loadDaoConf($module){
		$confPath = WEBROOT . "/conf/dao/$module.conf.php";
		if(!file_exists($confPath)){
			throw new Exception("conf load error. file: $confPath");
		}
		$conf = require($confPath);
		return $conf;
	}
}