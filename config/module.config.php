<?php

return array(
    'view_manager' => array(
        'template_map' => array(
            'phpwisdom/index/index' => __DIR__ .'/../view/user/index/index.phtml',
            'phpwisdom/index/login' => __DIR__ .'/../view/user/index/login.phtml',
            'phpwisdom/index/register' => __DIR__ .'/../view/user/index/register.phtml'
        ),
        'template_path_stack' => array(
            'phpwisdomuser' => __DIR__ . '/../view',
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'phpwisdomuser' => 'Phpwisdom\User\Controller\IndexController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'phpwisdomuser' => array(
                'type' => 'Literal',
                'priority' => 1000,
                'options' => array(
                    'route' => '/user',
                    'defaults' => array(
                        'controller' => 'phpwisdomuser',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'login' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/login',
                            'defaults' => array(
                                'controller' => 'phpwisdomuser',
                                'action'     => 'login',
                            ),
                        ),
                    ),
                ),
            ),
            'phpwisdomuserlogin' => array(
                'type' => 'Literal',
                'priority' => 1000,
                'options' => array(
                    'route' => '/login',
                    'defaults' => array(
                        'controller' => 'phpwisdomuser',
                        'action'     => 'login',
                    ),
                )
             ),
            'phpwisdomuserregister' => array(
                'type' => 'Literal',
                'priority' => 1000,
                'options' => array(
                    'route' => '/register',
                    'defaults' => array(
                        'controller' => 'phpwisdomuser',
                        'action'     => 'register',
                    ),
                )
             )
        ),
    ),
);
