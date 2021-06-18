<?php


namespace app\controllers;


use yii\base\Controller;

class BlogController extends Controller
{

    public function actionBlog()
    {
        $this->layout = '@app/views/layouts/super.php';
        return $this->render('blog');
    }

    public function actionBlog2()
    {
        $this->layout = '@app/views/layouts/super.php';
        return $this->render('blog2');
    }

    public function actionBlog3()
    {
        $this->layout = '@app/views/layouts/super.php';
        return $this->render('blog3');
    }

    public function actionBlog4()
    {
        $this->layout = '@app/views/layouts/super.php';
        return $this->render('blog4');
    }

}