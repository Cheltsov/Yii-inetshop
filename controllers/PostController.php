<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 13.03.2019
 * Time: 0:09
 */
namespace app\controllers;

use Yii;

class PostController extends MainController
{
    #Шаблон для всего контроллера
    public $layout = 'basic';

    public function beforeAction($action){
        if($action->id == "show"){
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex(){
        $arr = ['1','asdad','323231'];

        return $this->render('index', compact('arr'));
    }

    public function actionShow(){
        #Шаблон для этого события
        //$this->layout='basic';
        if(Yii::$app->request->isAjax){
            Debug(Yii::$app->request->post());
        }
        return $this->render('show');
    }
}