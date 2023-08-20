<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Conta $model */

$this->title = $model->NumeroConta;
$this->params['breadcrumbs'][] = ['label' => 'Contas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="conta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'NumeroConta' => $model->NumeroConta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'NumeroConta' => $model->NumeroConta], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'NumeroConta',
            'TipoConta',
            'Saldo',
            'ID_Cliente',
        ],
    ]) ?>

</div>
