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

    const TYPE_BUSINESS = 1;
    const TYPE_HOME = 0;
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
            [['name_ru', 'name_uk'], 'string', 'max' => 100],
            [['type'], 'integer']
        ];
    }

    /**
     * {@inheritdoc}    <h1><?= Html::encode($this->title) ?></h1>

     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uk' => 'Название укр',
            'name_ru' => 'Название ру',
            'type' => 'Для бизнеса',
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

    public function getName()
    {
        return $this->{'name_' . Yii::$app->language};
    }

    public static function getGroupsBusiness()
    {
        return self::find()->where(['type' => self::TYPE_BUSINESS])->all();
    }
}
