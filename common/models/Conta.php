<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%conta}}".
 *
 * @property int $NumeroConta
 * @property string|null $TipoConta
 * @property float|null $Saldo
 * @property int|null $ID_Cliente
 *
 * @property Cliente $cliente
 * @property Transacao[] $transacaos
 */
class Conta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%conta}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TipoConta'], 'string'],
            [['Saldo'], 'number'],
            [['ID_Cliente'], 'integer'],
            [['ID_Cliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::class, 'targetAttribute' => ['ID_Cliente' => 'ID_Cliente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'NumeroConta' => 'Numero Conta',
            'TipoConta' => 'Tipo Conta',
            'Saldo' => 'Saldo',
            'ID_Cliente' => 'Id Cliente',
        ];
    }

    /**
     * Gets query for [[Cliente]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ClienteQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::class, ['ID_Cliente' => 'ID_Cliente']);
    }

    /**
     * Gets query for [[Transacaos]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\TransacaoQuery
     */
    public function getTransacaos()
    {
        return $this->hasMany(Transacao::class, ['NumeroConta' => 'NumeroConta']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ContaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ContaQuery(get_called_class());
    }
}
