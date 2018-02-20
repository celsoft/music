<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Corrector */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="corrector-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'in')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'out')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
