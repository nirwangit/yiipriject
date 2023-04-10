<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dataset".
 *
 * @property string|null $name
 * @property string|null $timezone
 * @property string|null $dayOfWeek
 * @property string|null $availableAt
 * @property string|null $availableUntil
 * @property int $id
 */
class Dataset extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dataset';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 17],
            [['timezone'], 'string', 'max' => 42],
            [['dayOfWeek'], 'string', 'max' => 11],
            [['availableAt'], 'string', 'max' => 12],
            [['availableUntil'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'timezone' => 'Timezone',
            'dayOfWeek' => 'Day Of Week',
            'availableAt' => 'Available At',
            'availableUntil' => 'Available Until',
            'id' => 'ID',
        ];
    }
}
