<?php
/**
 * ============================================================
 * Copyright (c) 2018 Maxim Martynov <maksimblg@gmail.com>
 * ------------------------------------------------------------
 * Данный код защищен авторскими правами
 * ------------------------------------------------------------
 * Файл: ModuleInterface.php
 * ============================================================
 */
namespace app\modules\core\components;
/**
 * Interface ModuleInterface
 * @package app\components
 */
interface ModuleInterface
{
    /**
     * Initializes the module.
     */
    public function init();
    /**
     * Bootstrap method to be called during application bootstrap stage.
     * @param Application $app the application currently running
     */
    public function bootstrap($app);
}