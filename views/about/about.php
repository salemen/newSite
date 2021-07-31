
<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ballance</title>
    </head>
    <body>

    <?php $form = ActiveForm::begin(['id' => 'form-input-example',]); ?>

   <input type="text" name="ball">Введите <!--формируем поле input-->
    <br/>
    <div class="form-group">
        <?= Html::submitButton('Проверить', ['class' => 'btn btn-success']) ?>  <!--кнопка отправки значения в поле-->
    </div>
        <?php print_r($ball); ?>  <!--вывод результата-->

    <?php ActiveForm::end(); ?>

    </body>
    </html>


</div>

