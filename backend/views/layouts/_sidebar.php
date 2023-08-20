<?php
?>

<aside class="shadow">
<!--<aside>-->
    <?php
    echo \yii\bootstrap5\Nav::widget([
        'options' => [
            'class' => 'd-flex flex-column nav-pills mt-5 py-3'
        ],
        'items' => [
            [
                'label' => 'Informações',
                'url' => ['/site/index']
            ],
            [
                'label' => 'Contas',
                'url' => ['/conta/index']
            ],
            [
                'label' => 'Transações',
                'url' => ['/transacao/index']
            ],
            [
                'label' => 'Configurações',
                'url' => ['/configuracoes/index']
            ]
        ]
    ])
    ?>
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
