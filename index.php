<?php
#入口文件
#author:赵鑫
define('WEBROOT', __DIR__);
define('LIBROOT', WEBROOT . "/lib");
define('CONFROOT', WEBROOT . "/conf");
#自动加载类
if(!function_exists('ClassAutoLoader')){
	function ClassAutoLoader($class){
        $class = strtolower($class);
        //Controller_Abc.php===>>>controller/abc.php
        $pathArr = explode('_', $class);
        if(count($pathArr) >= 2){
            $dir = $pathArr[0];
            $file = $pathArr[1];
            $classFile = WEBROOT . "/$dir/$file.php";
            if(is_file($classFile) && !class_exists($class)){
                require $classFile;
                return true;
            }
        }
        //lib
        $classFile = __DIR__ . "/lib/{$class}.class.php";
        if(is_file($classFile) && !class_exists($class)){
            require $classFile;
            return true;
		}
	}
}
spl_autoload_register('classAutoLoader');

#全局变量

try{
	#获取路由
	$objRequest = new Request();
	$routerArr = $objRequest->getRouter();

	#处理路由，解析action
    $controller = $routerArr['controller'];
    $uri = $routerArr['uri'];
    $class = "Controller_$controller";
    $objCntl = new $class();
    $objCntl->parseAction($uri);

    #其他

}
catch(AcaciaException $e){
	Common::dump("Sys Error ,msg: " . $e->getMessage());
}
