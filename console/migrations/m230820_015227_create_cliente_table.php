<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cliente}}`.
 */
class m230820_015227_create_cliente_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cliente}}', [
            'ID_Cliente' => $this->primaryKey(),
            'Nome' => $this->string()->notNull(),
            'CPF' => $this->string()->unique(),
            'Endereco' => $this->text(),
            'DataNascimento' => $this->date(),
            'Telefone' => $this->string(),
        ]);
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cliente}}');
    }
}
