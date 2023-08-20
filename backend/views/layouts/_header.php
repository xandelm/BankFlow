<?php

use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\bootstrap5\Html;


NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
    ],
]);
$menuItems = [
    ['label' => 'Página Inicial', 'url' => ['/site/index']],
    ['label' => 'Sobre', 'url' => ['/site/about']],
    ['label' => 'Contato', 'url' => ['/site/contact']],
];
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
}

echo Nav::widget([
//        'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
    'options' => ['class' => 'navbar-nav ms-auto'],
    'items' => $menuItems,
]);
if (Yii::$app->user->isGuest) {
    echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
} else {
    echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
        . Html::submitButton(
            'Logout (' . Yii::$app->user->identity->username . ')',
            ['class' => 'btn btn-link logout text-decoration-none']
        )
        . Html::endForm();
}
NavBar::end();
?>

