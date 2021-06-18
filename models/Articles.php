<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $title
 * @property string $intro
 * @property string $text
 * @property int $date
 * @property string $author
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'intro', 'text', 'date', 'author'], 'required'],
            [['text'], 'string'],
            [['date'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['intro'], 'string', 'max' => 200],
            [['author'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'intro' => 'Intro',
            'text' => 'Text',
            'date' => 'Date',
            'author' => 'Author',
        ];
    }
}
