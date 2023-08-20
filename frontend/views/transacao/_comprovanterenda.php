<?php
/** @var $model \common\models\Transacao */
?>


<div class="media">
    <img src="..." class="mr-3" alt="...">
    <div class="media-body">
        <h5 class="mt-0"><?php echo $model->TipoTransacao?></h5>
        <?php echo \yii\helpers\StringHelper::truncateWords($model->DataHora) ?>
    </div>
</div>
