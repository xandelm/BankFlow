<?php
use yii\helpers\Html;
?>

<aside class="sidebar custom-sidebar">
    <nav class="nav flex-column">
        <?= Html::a('Dashboard', ['/site/dashboard'], ['class' => 'nav-link custom-link']) ?>
        <div class="custom-submenu">
            <?= Html::a('Produtos', ['/product/index'], ['class' => 'nav-link custom-link']) ?>
            <?= Html::a('Pedidos', ['/order/index'], ['class' => 'nav-link custom-link']) ?>
            <?= Html::a('Clientes', ['/customer/index'], ['class' => 'nav-link custom-link']) ?>
        </div>
        <!-- Adicione mais links de navegação conforme necessário -->
    </nav>
</aside>


<!--<div class="list-group">-->
<!--    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">-->
<!--        The current link item-->
<!--    </a>-->
<!--    <a href="#" class="list-group-item list-group-item-action">A second link item</a>-->
<!--    <a href="#" class="list-group-item list-group-item-action">A third link item</a>-->
<!--    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>-->
<!--    <a class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link item</a>-->
<!--</div>-->
