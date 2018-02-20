<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "vk_accounts".
 *
 * @property integer $id
 * @property string $login
 * @property string $password
 */
class VkAccounts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vk_accounts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            [['login', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Логин',
            'password' => 'Пароль',
        ];
    }
}
