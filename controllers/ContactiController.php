<?php

namespace app\controllers;

use Yii;
use app\models\contact;
use app\models\telephone;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;


class ContactController extends Controller
{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],  // контакт удаляется с запросом методом POST
                ],
            ],
        ];
    }


    public function actionIndex()  // функция вывода ВСЕХ контактов на страницу
    {
        $query = Contact::find()->orderBy(['id' => SORT_DESC]); //  Делаем выборку из БД и сортируем по убывающей

        // далее вызваем пагинатор считаем количестов записей в БД и устанавливаем вывод по 12 записей на странице
        $pages = new Pagination (['totalCount'=> $query->count(), 'pageSize' => 12, 'forcePageParam'=> false, 'pageSizeParam'=> false ]);
        $model = $query->offset($pages->offset)->limit($pages->limit)->all(); // формируем переменную

        return $this ->render('index',compact ('model','pages','query')); // все передаем на станицу index
    }


    public function actionView($id)  // функция вывода подробнее о контакте
    {

        $query = Telephone::find()->select('tel')->where(['parent_id' => $id])->all();


        return $this->render('view', [
            'model' => $this->findModel($id),
            'query' => $query,
        ]);
    }


    public function actionCreate() // функция создания контакта
    {
        $model = new contact();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }


        if ($model->tel) {// проверяем есть ли номер телефона
            $telephone = new Telephone(); // создаем объект Telephone
            $telephone->parent_id = $model->id; // присваеваем значение parent_id -> id пользователя
            $telephone->tel = $model->tel; // записываем в tel телефон пользователя
            $telephone->save();  // сохраняем

            if ($_POST['item']) { // проверяем есть дополнительные номера телефонов
                $telephone->tel = $_POST['item']; // записываем в переменную
                $telephone->save();  // сохраняем
            }

        }

        return $this->render('create', [
            'model' => $model
        ]);
    }


    public function actionUpdate($id)  // функция обновления контакта
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        if ($model->tel) {// проверяем есть ли номер телефона
            $telephone = new Telephone(); // создаем объект Telephone
            $telephone->parent_id = $model->id; // присваеваем значение parent_id -> id пользователя
            $telephone->tel = $model->tel; // записываем в tel телефон пользователя
            $telephone->save();  // сохраняем

            if ($_POST['item']) { // проверяем есть дополнительные номера телефонов
                $telephone->tel = $_POST['item']; // записываем в переменную
                $telephone->save();  // сохраняем
            }

        }

        $date = date("Y-m-d H:i:s");  // определяем текущую дату и время
        $model->date = $date; // обновляем дату и время
        $model->save(); // сохраняем

        return $this->render('update', [
            'model' => $model
        ]);
    }


    public function actionDelete($id)  // функция удаления контакта
    {
        $this->findModel($id)->delete();

        $delete = telephone::deleteAll(['parent_id' => $id]); // удаляем из таблицы с телефонами, ВСЕ телефоны контакта

        return $this->redirect(['index']);
    }


}
