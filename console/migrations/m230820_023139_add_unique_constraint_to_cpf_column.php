<?php

use yii\db\Migration;

/**
 * Class m230820_023139_add_unique_constraint_to_cpf_column
 */
class m230820_023139_add_unique_constraint_to_cpf_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex('unique-cpf', '{{%cliente}}', 'CPF', true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('unique-cpf', '{{%cliente}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230820_023139_add_unique_constraint_to_cpf_column cannot be reverted.\n";

        return false;
    }
    */
}
