<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Transacao $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transacao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DataHora')->textInput() ?>

    <?= $form->field($model, 'TipoTransacao')->dropDownList([ 'transferencia' => 'Transferencia', 'boleto' => 'Boleto', 'pix' => 'Pix', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Valor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ComprovanteRenda')->textInput() ?>

    <?= $form->field($model, 'NumeroConta')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
