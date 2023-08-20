<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Conta $model */

$this->title = 'Update Conta: ' . $model->NumeroConta;
$this->params['breadcrumbs'][] = ['label' => 'Contas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NumeroConta, 'url' => ['view', 'NumeroConta' => $model->NumeroConta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="conta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
