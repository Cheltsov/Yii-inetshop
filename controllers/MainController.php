<?php
/**
 * Created by PhpStorm.
 * User: Константин
 * Date: 13.03.2019
 * Time: 0:04
 */
namespace app\controllers;

use yii\web\Controller;

class MainController extends Controller
{
    public function Debug($obj){
        print_r($obj);
        die();
    }
}
function Debug($obj){
    print_r($obj);
    die();
}