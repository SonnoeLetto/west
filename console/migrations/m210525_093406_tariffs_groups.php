<?php

use yii\db\Migration;

/**
 * Class m210525_093406_tariffs_groups
 */
class m210525_093406_tariffs_groups extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tariffs_groups}}', [
            'id' => $this->primaryKey(),
            'name_ru' => $this->string(100)->notNull(),
            'name_uk' => $this->string(100)->notNull(),
            'type' => $this->integer()

        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tariffs_groups}}');
    }
}
