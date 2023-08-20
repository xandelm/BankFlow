<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Conta]].
 *
 * @see \common\models\Conta
 */
class ContaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Conta[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Conta|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
