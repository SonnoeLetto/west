<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cards".
 *
 * @property int $id
 * @property string|null $text_ru
 * @property string|null $text_uk
 * @property int|null $wi_fi_icon
 * @property int|null $phone_icon
 * @property int|null $vols_icon
 * @property int|null $vlan_icon
 */
class Card extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    public $colors = ['#FF375F', '#FFA227', '#1ED760', '#2997FF', '#315EFB', '#BF5AF2'];
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cards';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_ru', 'text_uk'], 'string'],
            [['wi_fi_icon', 'phone_icon', 'vols_icon', 'vlan_icon'], 'integer'],
            [['text_preview_ru', 'text_preview_uk'], 'string', 'max' => 255]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text_ru' => 'Рус. текст',
            'text_uk' => 'Укр. текст',
            'text_preview_ru' => 'Рус. превью текст',
            'text_preview_uk' => 'Рус. превью текст',
            'wi_fi_icon' => 'иконка Wi-Fi',
            'phone_icon' => 'иконка Телефония',
            'vols_icon' => 'иконка ВОЛС',
            'vlan_icon' => 'иконка VLAN',
        ];
    }


    public function getText()
    {
        return $this->{'text_' . Yii::$app->language};
    }


    public function getTextPreview()
    {
        return $this->{'text_preview_' . Yii::$app->language};
    }

//    public static function getActive()
//    {
//        return self::find()->where(['status' => self::STATUS_ACTIVE])->all();
//    }
}
