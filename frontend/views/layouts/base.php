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
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100 pt-3">
<header class="mb-4">
    <?php
    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
        'brandLabel' => Html::img(Yii::$app->request->baseUrl . '/favicon2.ico', ['alt' => Yii::$app->name, 'class' => 'favicon']) . Yii::$app->name,

        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
//            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
            'class' => 'navbar navbar-expand-md navbar-dark custom-navbar fixed-top custom-navbar shadow',
            'style' => 'background-color: #333; color=#28a745;',
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
        'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0 ms-auto'],
        'items' => $menuItems,
    ]);
    if (Yii::$app->user->isGuest) {
        echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-link login text-decoration-none custom-btn']]),['class' => ['d-flex']]);
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
</header>
<?php $this->beginBody() ?>

<div class="wrap h-100 d-flex flex-column">
    <?php echo $content ?>
</div>

<!--<footer class="footer mt-auto py-3 text-muted">-->
<!--    <div class="container">-->
<!--        <p class="float-start">&copy; --><?php //= Html::encode(Yii::$app->name) ?><!-- --><?php //= date('Y') ?><!--</p>-->
<!--        <p class="float-end">--><?php //= Yii::powered() ?><!--</p>-->
<!--    </div>-->
<!--</footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
