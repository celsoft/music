<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CorrectorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Корректор запросов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            </div>
            <div class="box-body">
                <?php Pjax::begin(); ?>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        [
                            'class' => 'yii\grid\SerialColumn',
                            'headerOptions' => ['width' => '40', 'style' => 'text-align: center;'],
                            'contentOptions' => ['style' => 'text-align: center;'],
                        ],
                        'in',
                        'out',
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'header' => 'Действия',
                            'headerOptions' => ['width' => '80'],
                            'contentOptions' => ['style' => 'text-align: center;'],
                            'template' => '{update} {delete}',
                        ],
                    ],
                ]); ?>
                <?php Pjax::end(); ?>
            </div>
            <div class="box-footer">
                <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
</div>
