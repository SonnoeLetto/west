<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tariffs_groups".
 *
 * @property int $id
 * @property string $name
 *
 * @property Cities[] $cities
 * @property Tariffs[] $tariffs
 */
class TariffsGroups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tariffs_groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}    <h1><?= Html::encode($this->title) ?></h1>

     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
        ];
    }

    /**
     * Gets query for [[Cities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(Cities::className(), ['group_id' => 'id']);
    }

    /**
     * Gets query for [[Tariffs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTariffs()
    {
        return $this->hasMany(Tariffs::className(), ['group_id' => 'id']);
    }
}
