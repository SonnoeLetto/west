<?php

use yii\db\Migration;

/**
 * Class m210525_095540_cities
 */
class m210525_095540_cities extends Migration
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

        $this->createTable('{{%cities}}', [
            'id' => $this->primaryKey(),
            'group_id' => $this->integer(),
            'name_ru' => $this->string(100)->notNull(),
            'name_uk' => $this->string(100)->notNull(),
            'firm' => $this->integer()

        ], $tableOptions);

        $this->addForeignKey('cities_group', '{{%cities}}', 'group_id', '{{%tariffs_groups}}', 'id', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cities}}');
    }
}
