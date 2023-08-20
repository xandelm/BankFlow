<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Conta $model */

$this->title = 'Create Conta';
$this->params['breadcrumbs'][] = ['label' => 'Contas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
