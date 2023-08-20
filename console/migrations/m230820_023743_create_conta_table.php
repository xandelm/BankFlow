<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%conta}}`.
 */
class m230820_023743_create_conta_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%conta}}', [
            'NumeroConta' => $this->primaryKey(),
            'TipoConta' => "ENUM('poupança', 'corrente', 'salario')", // Use ENUM type
            'Saldo' => $this->decimal(10, 2),
            'ID_Cliente' => $this->integer(),
        ]);

        $this->addForeignKey('fk-conta-cliente', '{{%conta}}', 'ID_Cliente', '{{%cliente}}', 'ID_Cliente', 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%conta}}');
    }
}
