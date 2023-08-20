<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%cliente}}".
 *
 * @property int $ID_Cliente
 * @property string $Nome
 * @property string|null $CPF
 * @property string|null $Endereco
 * @property string|null $DataNascimento
 * @property string|null $Telefone
 *
 * @property Conta[] $contas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cliente}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome'], 'required'],
            [['Endereco'], 'string'],
            [['DataNascimento'], 'safe'],
            [['Nome', 'CPF', 'Telefone'], 'string', 'max' => 255],
            [['CPF'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Cliente' => 'Id Cliente',
            'Nome' => 'Nome',
            'CPF' => 'Cpf',
            'Endereco' => 'Endereco',
            'DataNascimento' => 'Data Nascimento',
            'Telefone' => 'Telefone',
        ];
    }

    /**
     * Gets query for [[Contas]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ContaQuery
     */
    public function getContas()
    {
        return $this->hasMany(Conta::class, ['ID_Cliente' => 'ID_Cliente']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ClienteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ClienteQuery(get_called_class());
    }
}
