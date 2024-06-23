<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exspanation".
 *
 * @property int $id
 * @property string $name
 * @property string $date
 * @property int $category_id
 * @property string $description
 *
 * @property Category $category
 * @property Invintarisation[] $invintarisations
 */
class Exspanation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exspanation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category_id', 'description'], 'required'],
            [['date'], 'safe'],
            [['category_id'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'date' => 'Дата поступления',
            'category_id' => 'Категория',
            'description' => 'Описание',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Invintarisations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvintarisations()
    {
        return $this->hasMany(Invintarisation::class, ['expanation_id' => 'id']);
    }
}
