<?php

use yii\db\Migration;

/**
 * Class m210525_105713_tariffs
 */
class m210525_105713_tariffs extends Migration
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

        $this->createTable('{{%tariffs}}', [
            'id' => $this->primaryKey(),
            'group_id' => $this->integer(),
            'speed' => $this->integer(),
            'price' => $this->integer(),
            'price_ip' => $this->integer(),
            'status' => $this->smallInteger()->notNull(),
            'is_hot' => $this->smallInteger(),
            'for_new' => $this->smallInteger()
        ], $tableOptions);

        $this->addForeignKey('fk_tariffs_group', '{{%tariffs}}', 'group_id', '{{%tariffs_groups}}', 'id', 'RESTRICT');
    }

    public function safeDown()
    {
        $this->dropTable('{{%tariffs}}');
    }
}
