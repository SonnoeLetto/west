<?php

use yii\db\Migration;

/**
 * Class m210513_065602_blog
 */
class m210513_065602_blog extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%blog}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->integer(),
            'slug' => $this->string(255),
            'name_ru' => $this->string(255),
            'name_uk' => $this->string(255),
            'text_ru' => $this->text(),
            'text_uk' => $this->text(),
            'meta_title_ru' => $this->string(150),
            'meta_title_uk' => $this->string(150),
            'meta_description_ru' => $this->text(),
            'meta_description_uk' => $this->text(),
            'meta_keywords_ru' => $this->string(255),
            'meta_keywords_uk' => $this->string(255),
            'img_big' => $this->string(255)->notNull()->unique(),
            'img_middle' => $this->string(255)->notNull()->unique(),
            'img_small' => $this->string(255)->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(0),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%blog}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210513_065602_blog cannot be reverted.\n";

        return false;
    }
    */
}
