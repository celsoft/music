<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Навигация', 'options' => ['class' => 'header']],
                    ['label' => 'Настройки', 'icon' => 'cogs', 'url' => ['/admin/settings/index']],
                    ['label' => 'Аккаунты VK', 'icon' => 'vk', 'url' => ['/admin/vk']],
                    ['label' => 'Корректор запросов', 'icon' => 'font', 'url' => ['/admin/corrector']],
                ],
            ]
        ) ?>

    </section>

</aside>