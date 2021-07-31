<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
   public function actionAbout()
    {
        if ($_POST['ball'] ) {  // проверяем есть ли $_POST['ball']
            $ball = $_POST['ball'];  // если есть записываем данные в переменную $ball
            $array = explode(',', $ball); // разделяем переменную по запятой на две части (два массива)
            $lv = substr_count($array[0],'!'); // считаем количество ! в первом массиве
            $lvo= substr_count($array[0],'?'); // счиаем количество ? в первом массиве
            $rv = substr_count($array[1],'!'); // считаем количество ! в втором массиве
            $rvo= substr_count($array[1],'?');  // считаем количество ? в втором массиве

            if (!$lv == 0) $lv = $lv * 2; // проверяем если $lv не равна нулю умножаем ее значение на 2

            if (!$lvo == 0) $lvo = $lvo * 3;  // проверяем если $lvo не равна нулю умножаем ее значение на 3

            if (!$rv == 0) $rv = $rv * 2;  // проверяем если $rv не равна нулю умножаем ее значение на 2

            if (!$rvo == 0) $rvo = $rvo * 3;  // проверяем если $rvo не равна нулю умножаем ее значение на 3

           $left =  $lv + $lvo; // прибавляем все суммы в левой части
           $right = $rv + $rvo;  // прибавляем все суммы в правой части

           if ($left > $right){ // проверяем если сумма в левой части больше чем правой
               $ball = "left";  // записываем в переменную значение left
           }elseif($left < $right){  // проверяем если сумма в правой части больше чем левой
               $ball = "right";  // записываем в переменную значение right
           }elseif($left = $right){  // проверяем если сумма в правой части и левой равны
               $ball = "ballans"; // записываем в переменную значение ballans
           }

        }
        return $this->render('about', ['ball'=> $ball]); // передаем переменную ball обратно в шаблон и там выводим
    }
}
}
