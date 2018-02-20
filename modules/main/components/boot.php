<?php

/**
 * @author Maxim Martynov <maksimblg@gmail.com>
 * @copyright 2017
 */

namespace app\modules\main\components;

use yii;
use yii\base\BootstrapInterface;

class boot implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $settings = Yii::$app->settings;

        $route = $settings->get('Settings.trackLink');
        $theme = $settings->get('Settings.theme');

        Yii::$app->view->theme = new \yii\base\Theme([
            'basePath' => '@app/themes/' . $theme,
            'baseUrl' => '@web/themes/' . $theme,
            'pathMap' => [
                '@app/views' => '@app/themes/'.$theme.'/views',
                '@app/modules' => '@app/themes/'.$theme.'/modules',
            ],

        ]);

        $app->getUrlManager()->addRules([
            $route => 'main/default/logout'
        ], false);
    }
}