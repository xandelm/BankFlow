<?php

use common\models\Conta;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Contas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Conta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'NumeroConta',
            'TipoConta',
            'Saldo',
            'ID_Cliente',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Conta $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'NumeroConta' => $model->NumeroConta]);
                 }
            ],
        ],
    ]); ?>


</div>
