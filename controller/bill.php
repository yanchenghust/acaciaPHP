<?php

class Controller_Bill extends Controller
{
    protected function getRouter(){
        
        $actionArr = [
            'text'=>[
                'index'=> 'index',
            ],
            'regex'=>[
                'list/(\d+)'=> 'getBillList',
                'add'=> 'addBill',
                'submit'=> 'submitBill',
            ],


        ];
        return $actionArr;
    }
}