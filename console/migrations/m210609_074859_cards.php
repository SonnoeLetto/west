<?php

use yii\db\Migration;

/**
 * Class m210609_074859_card
 */
class m210609_074859_cards extends Migration
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

        $this->createTable('{{%cards}}', [
            'id' => $this->primaryKey(),
            'text_ru' => $this->text(),
            'text_uk' => $this->text(),
            'text_preview_ru' => $this->string(255),
            'text_preview_uk' => $this->string(255),

            'wi_fi_icon' => $this->smallInteger(),
            'phone_icon' => $this->smallInteger(),
            'vols_icon' => $this->smallInteger(),
            'vlan_icon' => $this->smallInteger(),


        ], $tableOptions);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cards}}');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210609_074859_card cannot be reverted.\n";

        return false;
    }
    */
}
