<?php

class Controller_Note extends Controller
{
    protected function getRouter(){
        
        $actionArr = [
            'text'=>[
                'index'=> 'index',
            ],
            'regex'=>[
                'list/(\d+)'=> 'getNoteList',
            ],


        ];
        return $actionArr;
    }
}