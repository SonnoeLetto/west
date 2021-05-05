<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string $img_desktop
 * @property string $img_tablet
 * @property string $img_mobile
 * @property string $title_ru
 * @property string $title_uk
 * @property string|null $text_ru
 * @property string|null $text_uk
 * @property string $link
 * @property int $status
 * @property int $type
 */

class Slider extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    public $image_desktop;
    public $image_tablet;
    public $image_mobile;

    const TYPES = [
        1 => 'Центр',
        2 => 'Лево'
    ];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sliders';
    }

    /**
     * {@inheritdoc}
     */




    public function rules()
    {
        return [
            [['title_ru', 'title_uk', 'link', 'type'], 'required'],
            [['text_ru', 'text_uk'], 'string'],
            [['text_color', 'title_color'], 'string', 'max' => 10],
            [['status', 'type'], 'integer'],
            [['title_ru', 'title_uk', 'link','img_desktop', 'img_tablet','img_mobile'], 'string', 'max' => 255],
            [['link_text_uk', 'link_text_ru', 'link'], 'string', 'max' => 100],
            ['type', 'in', 'range' => array_keys(self::TYPES)],
            [['status'], 'required'],
            [['image_desktop'], 'image',
                'extensions' => 'jpg',
                'skipOnEmpty' => !$this->isNewRecord,
                'maxFiles' => 1,
//                'minWidth' => 1200, 'maxWidth' => 1920,
//                'minHeight' => 600, 'maxHeight' => 620,
            ],
            [['image_tablet'], 'image',
                'extensions' => 'jpg',
                'skipOnEmpty' => !$this->isNewRecord,
                'maxFiles' => 1,
//                'minWidth' => 480, 'maxWidth' => 1200,
//                'minHeight' => 600, 'maxHeight' => 600,
            ],
            [['image_mobile'], 'image',
                'extensions' => 'jpg',
                'skipOnEmpty' => !$this->isNewRecord,
                'maxFiles' => 1,
//                'minWidth' => 320, 'maxWidth' => 480,
//                'minHeight' => 200, 'maxHeight' => 600,
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img_desktop' => 'Изображение для мониторов',
            'img_tablet' => 'Изображение для планш. устройства',
            'img_mobile' => 'Изображение для моб. устройства',
            'image_desktop' => 'Изображение для мониторов',
            'image_tablet' => 'Изображение для планш. устройства',
            'image_mobile' => 'Изображение для моб. устройства',
            'title_ru' => 'Русский заголовок',
            'title_uk' => 'Украинский заголовок',
            'title_color' => 'Цвет заголовка',
            'text_ru' => 'Русский текст',
            'text_uk' => 'Украинский текст',
            'text_color' => 'Цвет текста',
            'link' => 'Ссылка',
            'status' => 'Статус',
            'type' => 'Тип',
            'link_text_uk' => 'Украинский текст ссылки',
            'link_text_ru' => 'Русский текст ссылки'
        ];
    }
    public function upload()
    {
        if($this->validate()) {
            $this->image_desktop->saveAs('uploads/slider/' . Inflector::slug($this->img_desktop));
            $this->image_tablet->saveAs('uploads/slider/' . Inflector::slug($this->img_tablet));
            $this->image_mobile->saveAs('uploads/slider/' . Inflector::slug($this->img_mobile));
            return true;
        } else {
            return false;
        }
    }

    public function getTitle()
    {
        return $this->{'title_' . Yii::$app->language};
    }

    public function getText()
    {
        return $this->{'text_' . Yii::$app->language};
    }
    public function getLinkText()
    {
        return $this->{'link_text_' . Yii::$app->language};
    }




    public static function getActive()
    {
        return self::find()->where(['status' => self::STATUS_ACTIVE])->all();
    }
}
