<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui;
//use yii\bootstrap5\ActiveForm;
/** @var yii\web\View $this */
/** @var common\models\Transacao $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transacao-form">

    <?php $form = ActiveForm::begin([
            'options' => ['class' => 'p-4']
    ]); ?>

<!--    --><?php //= $form->field($model, 'Data e Hora')->textInput() ?>
    <?= $form->field($model, 'DataHora')->widget(\yii\jui\DatePicker::class) ?>

    <?= $form->field($model, 'TipoTransacao')->dropDownList([ 'transferencia' => 'Transferencia', 'boleto' => 'Boleto', 'pix' => 'Pix', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Valor')->textInput(['maxlength' => true]) ?>

<!--    --><?php //= $form->field($model, 'ComprovanteRenda')->textInput() ?>
    <?= $form->field($model, 'ComprovanteRenda')->fileInput() ?>
    <?php echo $form->errorSummary($model)?>

    <?= $form->field($model, 'NumeroConta')->textInput() ?>

    <div class="form-group p-4">
        <?= Html::submitButton('Save') ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
