<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">N2C</span><span class="logo-lg">' . Yii::$app->name . '</span>', '/admin', ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <?= Html::a('Перейти на сайт', ['/'], ['target' => '_blank']) ?>
                </li>
                <li class="dropdown user user-menu">
                    <?= Html::a('Выход (' . Yii::$app->user->identity->login . ')', ['/main/default/logout'], ['data-method' => 'post']) ?>
                </li>
            </ul>
        </div>
    </nav>
</header>
