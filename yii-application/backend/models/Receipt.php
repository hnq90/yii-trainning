<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "receipt".
 *
 * @property integer $id
 * @property string $name
 * @property integer $price
 * @property integer $user_id
 */
class Receipt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'receipt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'price', 'user_id'], 'required'],
            [['price', 'user_id'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'user_id' => 'User ID',
        ];
    }

    public function getUser()
    {
          return $this->hasOne('User', ['id' => 'user_id']);
    }
}
