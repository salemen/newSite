<?php


namespace app\controllers;


use yii\base\Controller;

class ContactiController extends Controller
{

    public function actionContacti()
    {
        $this->layout = '@app/views/layouts/super.php';
        return $this->render('Contacti');
    }

}