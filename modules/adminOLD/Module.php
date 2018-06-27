<?php

namespace app\modules\admin;

use Yii;
use yii\web\NotFoundHttpException;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        if ( Yii::$app->user->isGuest ){
            throw new NotFoundHttpException(Yii::t('yii', 'Page not found.'));
        }
        parent::init();
    }
}
