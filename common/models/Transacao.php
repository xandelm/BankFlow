<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%transacao}}".
 *
 * @property int $ID_Transacao
 * @property string|null $DataHora
 * @property string|null $TipoTransacao
 * @property float|null $Valor
 * @property resource|null $ComprovanteRenda
 * @property int|null $NumeroConta
 *
 * @property Conta $numeroConta
 */
class Transacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%transacao}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DataHora'], 'safe'],
            [['TipoTransacao', 'ComprovanteRenda'], 'string'],
            [['Valor'], 'number'],
            [['NumeroConta'], 'integer'],
            [['NumeroConta'], 'exist', 'skipOnError' => true, 'targetClass' => Conta::class, 'targetAttribute' => ['NumeroConta' => 'NumeroConta']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Transacao' => 'Id Transacao',
            'DataHora' => 'Data Hora',
            'TipoTransacao' => 'Tipo Transacao',
            'Valor' => 'Valor',
            'ComprovanteRenda' => 'Comprovante Renda',
            'NumeroConta' => 'Numero Conta',
        ];
    }

    /**
     * Gets query for [[NumeroConta]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ContaQuery
     */
    public function getNumeroConta()
    {
        return $this->hasOne(Conta::class, ['NumeroConta' => 'NumeroConta']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\TransacaoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TransacaoQuery(get_called_class());
    }
}
