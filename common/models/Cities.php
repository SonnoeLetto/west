<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cities".
 *
 * @property int $id
 * @property int|null $group_id
 * @property string $name_ru
 * @property string $name_uk
 * @property int|null $firm
 *
 * @property TariffsGroups $group
 */
class Cities extends \yii\db\ActiveRecord
{

    const FIRM = [
        1 => 'Лекол',
        2 => 'Трейд'
    ];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_id', 'firm'], 'integer'],
            [['name_ru', 'name_uk'], 'required'],
            [['name_ru', 'name_uk'], 'string', 'max' => 100],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => TariffsGroups::className(), 'targetAttribute' => ['group_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Группа тарифов',
            'name_ru' => 'Рус. названия',
            'name_uk' => 'Укр. названия',
            'firm' => 'Фирма',
        ];
    }

    /**
     * Gets query for [[Group]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(TariffsGroups::className(), ['id' => 'group_id']);
    }

    public function getName()
    {
        return $this->{'name_' . Yii::$app->language};
    }

//    public static function getCities() {
//        return self::find()->where(['!=', 'firm', 'null'])->all();
//    }
}
