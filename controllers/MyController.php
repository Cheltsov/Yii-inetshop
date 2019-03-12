<?php

namespace app\controllers;

class MyController extends MainController
{
    public function  actionIndex($id = null){
        $hi = "Hello World";
        $names = ['Ivanov','Petrov','Sidorov'];
        //$this->Debug($names);
        //return $this->render('index',['hi'=>$hi,'names'=>$names]);
        return $this->render('index', compact('hi','names', 'id'));
    }
}