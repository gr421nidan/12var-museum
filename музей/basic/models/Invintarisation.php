<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "invintarisation".
 *
 * @property int $id
 * @property string $date
 * @property int $expanation_id
 * @property string $username
 * @property string $status
 *
 * @property Exspanation $expanation
 * @property User $username0
 */
class Invintarisation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'invintarisation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['expanation_id', 'status'], 'required'],
            [['expanation_id'], 'integer'],
            [['username'], 'string', 'max' => 20],
            [['status'], 'string', 'max' => 30],
            [['username'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['username' => 'username']],
            [['expanation_id'], 'exist', 'skipOnError' => true, 'targetClass' => Exspanation::class, 'targetAttribute' => ['expanation_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Дата инветоризации',
            'expanation_id' => 'Экспонат',
            'username' => 'Провёл',
            'status' => 'Статус',
        ];
    }

    /**
     * Gets query for [[Expanation]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExpanation()
    {
        return $this->hasOne(Exspanation::class, ['id' => 'expanation_id']);
    }

    /**
     * Gets query for [[Username0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsername0()
    {
        return $this->hasOne(User::class, ['username' => 'username']);
    }
}
