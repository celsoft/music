<?php

/**
 * ============================================================
 * Copyright (c) 2018 Maxim Martynov <maksimblg@gmail.com>
 * ------------------------------------------------------------
 * Данный код защищен авторскими правами
 * ------------------------------------------------------------
 * Файл: AdminController.php
 * ============================================================
 */

namespace app\modules\core\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\modules\core\models\LoginForm;

/**
 * Default controller for the `main` module
 */
class AdminController extends Controller
{
    public function beforeAction($action)
    {
        $this->layout = '@app/modules/core/views/admin/layouts/main';
        return parent::beforeAction($action);
    }

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        if ( Yii::$app->user->isGuest ){
            throw new NotFoundHttpException(Yii::t('yii', 'Page not found.'));
        }
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
}
