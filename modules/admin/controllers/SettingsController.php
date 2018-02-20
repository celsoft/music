<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\modules\admin\models\Settings;

class SettingsController extends Controller
{
    public function actionIndex(){
        //$settings = Yii::$app->settings;
        //$settings->clearCache();
        $model = new Settings();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            foreach ($model->toArray() as $key => $value) {
                Yii::$app->settings->set($key, $value, $model->formName(), 'string');
            }
            Yii::$app->getSession()->addFlash('success', 'Настройки успешно сохранены');
        }
        foreach ($model->attributes() as $key) {
            $model->{$key} = Yii::$app->settings->get($key, $model->formName());
        }
        return $this->render('index', ['model' => $model]);
        
    }
}
