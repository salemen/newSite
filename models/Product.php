<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $category_id
 * @property int $moder
 * @property string $username
 * @property string $oblast_region
 * @property string $gorod
 * @property string $raion
 * @property string $date
 * @property int $telephone
 * @property string $name
 * @property string|null $content
 * @property float $price
 * @property string|null $keywords
 * @property string|null $description
 * @property string $img
 * @property string $image
 * @property string $gallery
 * @property string $declat
 * @property string $declong
 * @property int $hit
 * @property int $hitok
 * @property string $hitdate
 * @property int $new
 * @property int $newok
 * @property string $newdate
 * @property int $sale
 * @property int $saleok
 * @property string $saledate
 * @property int $rekom
 * @property int $rekomok
 * @property string $rekomdate
 * @property int $videl
 * @property int $videlok
 * @property string $videldate
 * @property int $verh
 * @property int $verhok
 * @property string $verhdate
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'moder', 'username', 'oblast_region', 'gorod', 'raion', 'telephone', 'name', 'img', 'image', 'gallery', 'declat', 'declong', 'hit', 'hitok', 'hitdate', 'new', 'newok', 'newdate', 'sale', 'saleok', 'saledate', 'rekom', 'rekomok', 'rekomdate', 'videl', 'videlok', 'videldate', 'verh', 'verhok', 'verhdate'], 'required'],
            [['category_id', 'moder', 'telephone', 'hit', 'hitok', 'new', 'newok', 'sale', 'saleok', 'rekom', 'rekomok', 'videl', 'videlok', 'verh', 'verhok'], 'integer'],
            [['date', 'hitdate', 'newdate', 'saledate', 'rekomdate', 'videldate', 'verhdate'], 'safe'],
            [['price'], 'number'],
            [['username', 'oblast_region', 'keywords', 'description', 'img', 'image', 'gallery'], 'string', 'max' => 255],
            [['gorod', 'raion'], 'string', 'max' => 50],
            [['name'], 'string', 'max' => 40],
            [['content'], 'string', 'max' => 1500],
            [['declat', 'declong'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'moder' => 'Moder',
            'username' => 'Username',
            'oblast_region' => 'Oblast Region',
            'gorod' => 'Gorod',
            'raion' => 'Raion',
            'date' => 'Date',
            'telephone' => 'Telephone',
            'name' => 'Name',
            'content' => 'Content',
            'price' => 'Price',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'img' => 'Img',
            'image' => 'Image',
            'gallery' => 'Gallery',
            'declat' => 'Declat',
            'declong' => 'Declong',
            'hit' => 'Hit',
            'hitok' => 'Hitok',
            'hitdate' => 'Hitdate',
            'new' => 'New',
            'newok' => 'Newok',
            'newdate' => 'Newdate',
            'sale' => 'Sale',
            'saleok' => 'Saleok',
            'saledate' => 'Saledate',
            'rekom' => 'Rekom',
            'rekomok' => 'Rekomok',
            'rekomdate' => 'Rekomdate',
            'videl' => 'Videl',
            'videlok' => 'Videlok',
            'videldate' => 'Videldate',
            'verh' => 'Verh',
            'verhok' => 'Verhok',
            'verhdate' => 'Verhdate',
        ];
    }
}
