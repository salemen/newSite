<?php


namespace app\controllers;


use yii\base\Controller;

class ServisController extends Controller
{

    public function actionServis()
    {
        $this->layout = '@app/views/layouts/super.php';
        return $this->render('servis');
    }

    public function actionServis2()
    {
        $this->layout = '@app/views/layouts/super.php';
        return $this->render('servis2');
    }


}