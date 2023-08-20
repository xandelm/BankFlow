<?php

use common\models\Transacao;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Transacaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transacao-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transacao', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_Transacao',
            'DataHora',
            'TipoTransacao',
            'Valor',
            'ComprovanteRenda',
            //'NumeroConta',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Transacao $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID_Transacao' => $model->ID_Transacao]);
                 }
            ],
        ],
    ]); ?>


</div>
