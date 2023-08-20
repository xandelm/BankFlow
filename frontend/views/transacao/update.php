<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Transacao $model */

$this->title = 'Update Transacao: ' . $model->ID_Transacao;
$this->params['breadcrumbs'][] = ['label' => 'Transacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Transacao, 'url' => ['view', 'ID_Transacao' => $model->ID_Transacao]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
