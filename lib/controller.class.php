<?php
#定向路由到对应module->action()
abstract class Controller{

    protected $cntlName;

    public function __construct(){

    }

    abstract protected function getRouter();

    public function parseAction($uri){
        #从controller读取配置
        $routerArr = $this->getRouter();
        #根据uri获取controller和action
        $uriArr = explode('/', $uri);

        if(isset($uriArr[1]) && !empty($uriArr[1])){
            $controller = $uriArr[1];
        }else{
            $controller = "index";
        }
        if(isset($uriArr[2])){
            $action = $uriArr[2];
        }else{
            $action = 'index';
        }
        $paramArr = [];
        #根据routerArr正则匹配或直接匹配
        $method = 'index';//默认method
        if(isset($routerArr['text'][$action])){#直接匹配到的method
            $method = $routerArr['text'][$action];
        }else{#正则匹配
            foreach($routerArr['regex'] as $key=> $item){
                $mTimes = preg_match_all("#^/$controller/$key$#i", $uri, $matches);
                if(false !== $mTimes && 0 !==$mTimes){//匹配成功
                    $paramNum = count($matches);//参数个数
                    $method = $item;//方法名
                    for($i=1; $i<$paramNum; $i++){#参数列表
                        $paramArr[] = $matches[$i][0];
                    }
					break;
                }
            }
        }
        #根据methodArr拼接action->method(param)
        $class = "Action_" . ucfirst($controller);
        $objAction = new $class();
        if(!empty($paramArr)) {
            call_user_func_array(array($objAction, $method), $paramArr);
        }else{
            $objAction->$method();
        }
    }
}
