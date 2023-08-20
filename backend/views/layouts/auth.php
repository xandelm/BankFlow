<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
//use frontend\assets\AppAsset;

AppAsset::register($this);
//    $this->registerCssFile(Yii::getAlias('@web') . 'C:\xampp\htdocs\BankFlow\frontend\web\css\custom.css');
$this->registerCssFile(Yii::getAlias('@web') . '\css\custom.css');
$this->beginContent('@frontend/views/layouts/base.php')
?>




<!--<main role="main" class="flex-shrink-0">-->
<main role="main" class="d-flex">
    <!--    <div class="container">-->
    <div class="content-wrapper p-3">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<?php $this->endContent(); ?>

