<?php

namespace app\modules\core\components;

use yii;
use yii\base\Component;
use yii\base\BootstrapInterface;

class ModuleManager extends Component implements BootstrapInterface
{
    public function bootstrap($app)
    {
        Yii::$app->setModule('core', [
            'class' => 'app\modules\core\Core'
        ]);
        Yii::$app->getModule('core')->bootstrap(Yii::$app);
    }
}