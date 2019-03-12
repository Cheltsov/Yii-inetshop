<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 13.03.2019
 * Time: 0:09
 */
namespace app\controllers;

class PostController extends MainController
{
    public function actionIndex(){
        $arr = ['1','asdad','323231'];
        return $this->render('index', compact('arr'));
    }
}