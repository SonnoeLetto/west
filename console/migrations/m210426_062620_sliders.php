<?php

use yii\db\Migration;

/**
 * Class m210426_062620_sliders
 */
class m210426_062620_sliders extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sliders}}', [
            'id' => $this->primaryKey(),
            'img_desktop' => $this->string(255)->notNull()->unique(),
            'img_tablet' => $this->string(255)->notNull()->unique(),
            'img_mobile' => $this->string(255)->notNull()->unique(),
            'title_ru' => $this->string(255)->notNull(),
            'title_uk' => $this->string(255)->notNull(),
            'title_color' => $this->string(10),
            'text_ru' => $this->text(),
            'text_uk' => $this->text(),
            'text_color' => $this->string(10),
            'link' => $this->string(255)->notNull(),
            'otherLink' => $this->string(100)->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(0),
            'type' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%sliders}}');
    }
}
