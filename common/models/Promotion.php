<?php

namespace common\models;

use Yii;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\Inflector;

/**
 * This is the model class for table "promotion".
 *
 * @property int $id
 * @property int|null $created_at
 * @property string|null $slug
 * @property string|null $name_ru
 * @property string|null $name_uk
 * @property string|null $text_ru
 * @property string|null $text_uk
 * @property string|null $meta_title_ru
 * @property string|null $meta_title_uk
 * @property string|null $meta_description_ru
 * @property string|null $meta_description_uk
 * @property string|null $meta_keywords_ru
 * @property string|null $meta_keywords_uk
 * @property string $img_big
 * @property string $img_middle
 * @property string $img_small
 * @property int $status
 */
class Promotion extends ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    const PAGE_SIZE = 6;

    public $image_big;
    public $image_middle;
    public $image_small;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'promotion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_ru'], 'required'],
            [['created_at', 'status', 'time_read'], 'integer'],
            [['date_from', 'date_to'], 'date', 'format' => 'yyyy-mm-dd'],
            [['text_ru', 'text_uk', 'meta_description_ru', 'meta_description_uk'], 'string'],
            [['slug', 'name_ru', 'name_uk', 'meta_keywords_ru', 'meta_keywords_uk', 'img_big', 'img_middle', 'img_small'], 'string', 'max' => 255],
//            ['slug' => 'unique'],
//            ['name_ru' => 'unique'],
//            ['name_uk' => 'unique'],
            [['meta_title_ru', 'meta_title_uk'], 'string', 'max' => 150],
            [['image_big'],  'image',
                'extensions' => 'jpg',
                'skipOnEmpty' => !$this->isNewRecord,
                'maxFiles' => 1,
//                'minWidth' => 1200, 'maxWidth' => 1920,
//                'minHeight' => 600, 'maxHeight' => 600,
            ],
            [['image_middle'],  'image',
                'extensions' => 'jpg',
                'skipOnEmpty' => !$this->isNewRecord,
                'maxFiles' => 1,
//                'minWidth' => 480, 'maxWidth' => 1200,
//                'minHeight' => 600, 'maxHeight' => 600,
            ],
            [['image_small'], 'image',
                'extensions' => 'jpg',
                'skipOnEmpty' => !$this->isNewRecord,
                'maxFiles' => 1,
//                'minWidth' => 320, 'maxWidth' => 480,
//                'minHeight' => 600, 'maxHeight' => 600,
            ]
        ];
    }

    public function behaviors()
    {
        return array(
            array(
                'class' => SluggableBehavior::className(),
                'attribute' => 'name_ru',
            ),
            array(
                'class' => TimestampBehavior::className(),
                'attributes' => array(
                    ActiveRecord::EVENT_BEFORE_INSERT => array('created_at'),

                ),
                // ???????? ???????????? ?????????? ?????????????? UNIX ???????????????????????? datetime:
                // 'value' => new Expression('NOW()'),
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => '???????? ????????????????',
            'slug' => 'Slug',
            'name_ru' => '????????????????',
            'name_uk' => '???????????????????? ????????????????',
            'text_ru' => '?????????????? ??????????',
            'text_uk' => '???????????????????? ??????????',
            'meta_title_ru' => 'Meta Title Ru',
            'meta_title_uk' => 'Meta Title Uk',
            'meta_description_ru' => 'Meta Description Ru',
            'meta_description_uk' => 'Meta Description Uk',
            'meta_keywords_ru' => 'Meta Keywords Ru',
            'meta_keywords_uk' => 'Meta Keywords Uk',
            'img_big' => '???????????????? ??????????????',
            'img_middle' => '???????????????? ??????????????',
            'img_small' => '???????????????? ??????????????????',
            'status' => '????????????',
            'time_read' => '?????????? ????????????',
            'date_from' => '?????????? ????????????',
            'date_to' => '?????????? ??????????????????',
        ];
    }

    public function save_with_slug($slug)
    {
        $this->slug = Inflector::slug($slug);
        return $this->save();
    }

    public function upload()
    {
        if($this->validate()) {
            $this->image_big->saveAs('uploads/promotion/' . Inflector::slug($this->img_big));
            $this->image_middle->saveAs('uploads/promotion/' . Inflector::slug($this->img_middle));
            $this->image_small->saveAs('uploads/promotion/' . Inflector::slug($this->img_small));
            return true;
        } else {
            return false;
        }
    }

    public static function getActive()
    {
        return self::find()->where(['status' => self::STATUS_ACTIVE])->all();
    }

    public function getName()
    {
        return $this->{'name_' . Yii::$app->language};
    }

    public function getText()
    {
        return $this->{'text_' . Yii::$app->language};
    }

    public static function getPromotion()
    {
        return self::find()->where([
            'status' => self::STATUS_ACTIVE
        ])->orderBy(['created_at' => SORT_DESC]);
    }

    public static function getPromotionBySlug($slug)
    {
        return self::findOne(['slug' => $slug, 'status' => self::STATUS_ACTIVE]);
    }

    public function getNextPromotion()
    {
        return self::find()->where(['>', 'created_at', $this->created_at])->one();
    }

    public function getLastPromotion()
    {
        return self::find()->where(['<', 'created_at', $this->created_at])->one();
    }
}
