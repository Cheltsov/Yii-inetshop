<?php

namespace app\controllers\admin;

use app\controllers\MainController;

class UserController extends MainController
{
    public function actionIndex(){
        return $this->render('index');
    }
}