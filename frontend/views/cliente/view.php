<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Cliente $model */

$this->title = $model->ID_Cliente;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cliente-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID_Cliente' => $model->ID_Cliente], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID_Cliente' => $model->ID_Cliente], [
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
            'ID_Cliente',
            'Nome',
            'CPF',
            'Endereco:ntext',
            'DataNascimento',
            'Telefone',
        ],
    ]) ?>

</div>
