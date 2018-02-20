<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Settings;

$this->title = 'Настройки';

?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Настройки системы</h3>
            </div>
            <?php $form = ActiveForm::begin(['id' => 'settings-form']) ?>
            <div class="box-body">
                <?= $form->field($model, 'trackLink')->label('ЧПУ для трека:') ?>
                <?= $form->field($model, 'theme')->dropDownList($model->themesList())->label('Шаблон сайта:'); ?>
                <?= $form->field($model, 'feedbackEmail')->label('Email на который будут приходить письма из формы обратной связи:') ?>
                <?= $form->field($model, 'stopList')->label('Список стоп-слов для поиска (с новой строки):')->textarea(['rows' => '8']) ?>
            </div>
            <div class="box-footer">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
            </div>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>