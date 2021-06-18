<?php


namespace app\controllers;


use yii\base\Controller;

class CaseController extends Controller
{

    public function actionCase()
    {
        $this->layout = '@app/views/layouts/super.php';
        return $this->render('case');
    }

    public function actionCase2()
    {
        $this->layout = '@app/views/layouts/super.php';
        return $this->render('case2');
    }

    public function actionCase3()
    {
        $this->layout = '@app/views/layouts/super.php';
        return $this->render('case3');
    }

    public function actionCase4()
    {
        $this->layout = '@app/views/layouts/super.php';
        return $this->render('case4');
    }

}