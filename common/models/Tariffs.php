<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tariffs".
 *
 * @property int $id
 * @property int|null $group_id
 * @property int|null $speed
 * @property int|null $price
 * @property int|null $price_ip
 * @property int $status
 * @property int|null $is_hot
 * @property int|null $for_new
 *
 * @property TariffsGroups $group
 */
class Tariffs extends \yii\db\ActiveRecord
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tariffs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_id', 'speed', 'price', 'price_ip', 'status', 'is_hot', 'for_new'], 'integer'],
            [['status'], 'required'],
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
            'speed' => 'Скорость',
            'price' => 'Цена',
            'price_ip' => 'Price Ip',
            'status' => 'Статус',
            'is_hot' => 'Горячее предложение',
            'for_new' => 'Для нових клиентов',
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

    public static function getTariffs()
    {
        return self::find()->where(['status' => self::STATUS_ACTIVE])->all();
    }
}
