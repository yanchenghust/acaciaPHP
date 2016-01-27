<?php

class Controller_Index extends Controller
{
    protected function getRouter(){
        
        $actionArr = [
            'text'=>[
                'index'=> 'index',
            ],
            'regex'=>[
            ],


        ];
        return $actionArr;
    }
}
