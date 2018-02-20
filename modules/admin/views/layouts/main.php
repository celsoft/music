<?php
use yii\helpers\Html;
dmstr\web\AdminLteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>
    <div class="wrapper">
        <?= $this->render('header.php') ?>
        <?= $this->render('left.php') ?>
        <?= $this->render('content.php', ['content' => $content]) ?>
        <?= $this->render('footer.php') ?>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>