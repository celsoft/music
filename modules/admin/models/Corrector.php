<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "corrector".
 *
 * @property int $id
 * @property string $in
 * @property string $out
 */
class Corrector extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'corrector';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['in', 'out'], 'required'],
            [['in', 'out'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'in' => 'Исходный запрос',
            'out' => 'Итоговый запрос',
        ];
    }
}
