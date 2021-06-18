<?php


namespace app\controllers;


use yii\base\Controller;

class AboutController extends Controller
{

    public function actionAbout()
    {
        $this->layout = '@app/views/layouts/super.php';
        return $this->render('about');
    }

    public function actionAbout2()
    {
        $this->layout = '@app/views/layouts/super.php';
        return $this->render('about2');
    }

    public function actionAbout3()
    {
        $this->layout = '@app/views/layouts/super.php';
        return $this->render('about3');
    }

}