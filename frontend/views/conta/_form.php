<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Conta $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="conta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TipoConta')->dropDownList([ 'poupança' => 'Poupança', 'corrente' => 'Corrente', 'salario' => 'Salario', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Saldo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_Cliente')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
