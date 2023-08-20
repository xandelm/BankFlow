<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transacao}}`.
 */
class m230820_025041_create_transacao_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transacao}}', [
            'ID_Transacao' => $this->primaryKey(),
            'DataHora' => $this->dateTime(),
            'TipoTransacao' => "ENUM('transferencia', 'boleto', 'pix')", // Use ENUM type
            'Valor' => $this->decimal(10, 2),
            'ComprovanteRenda' => $this->binary(),
            'NumeroConta' => $this->integer(),
        ]);

        $this->addForeignKey('fk-transacao-conta', '{{%transacao}}', 'NumeroConta', '{{%conta}}', 'NumeroConta', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-transacao-conta', '{{%transacao}}');
        $this->dropTable('{{%transacao}}');
    }
}
