<?php

namespace app\modules\core;

use yii\base\Module;
use app\modules\core\components\ModuleInterface;

class Core extends Module implements ModuleInterface
{

    public $controllerNamespace = 'app\modules\core\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules([
            '' => 'core/default/index',
            'admin' => 'core/admin/index',
        ], false);
    }
}
