<aside class="main-sidebar">

    <section class="sidebar">


        <!-- search form -->
<!--        <form action="#" method="get" class="sidebar-form">-->
<!--            <div class="input-group">-->
<!--                <input type="text" name="q" class="form-control" placeholder="Search..."/>-->
<!--              <span class="input-group-btn">-->
<!--                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>-->
<!--                </button>-->
<!--              </span>-->
<!--            </div>-->
<!--        </form>-->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Слайдер', 'icon' => 'sliders', 'url' => '/slider'],
                    ['label' => 'Новости', 'icon' => 'file-text-o', 'url' => '/news'],
                    ['label' => 'Блог', 'icon' => 'file-text-o', 'url' => '/blog'],
                    ['label' => 'Акции', 'icon' => 'file-text-o', 'url' => '/promotion'],
                    ['label' => 'Карточки', 'icon' => 'file-text-o', 'url' => '/card'],
                    [
                      'label' => 'Секция тарифов',
                      'icon' => 'bookmark-o',
                        'items' => [
                            ['label' => 'Группа тарифов', 'icon' => 'fa fa-sticky-note', 'url' => '/tariffs-groups'],
                            ['label' => 'Населенные пункты', 'icon' => 'fa fa-sticky-note', 'url' => '/cities'],
                            ['label' => 'тарифы', 'icon' => 'fa fa-sticky-note', 'url' => '/tariffs'],
                        ]
                    ],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
//                    [
//                        'label' => 'Some tools',
//                        'icon' => 'share',
//                        'url' => '#',
//                        'items' => [
//                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
//                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
//                            [
//                                'label' => 'Level One',
//                                'icon' => 'circle-o',
//                                'url' => '#',
//                                'items' => [
//                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
//                                    [
//                                        'label' => 'Level Two',
//                                        'icon' => 'circle-o',
//                                        'url' => '#',
//                                        'items' => [
//                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
//                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
//                                        ],
//                                    ],
//                                ],
//                            ],
//                        ],
//                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
