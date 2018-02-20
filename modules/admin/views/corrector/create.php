<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Corrector */

$this->title = 'Create Corrector';
$this->params['breadcrumbs'][] = ['label' => 'Correctors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="corrector-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
