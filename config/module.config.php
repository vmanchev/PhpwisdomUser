<?php
namespace User;

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
            'phpwisdomuser' => 'PhpwisdomUser\Controller\IndexController',
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
    'doctrine' => array(
        'driver' => array(
            // defines an annotation driver with two paths, and names it `phpwisdom_annotation_driver`
            'phpwisdom_annotation_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__.'/../src/User/Entity'
                ),
            ),
            // default metadata driver, aggregates all other drivers into a single one.
            // Override `orm_default` only if you know what you're doing
            'orm_default' => array(
                'drivers' => array(
                    // register `my_annotation_driver` for any entity under namespace `My\Namespace`
                    'PhpwisdomUser\Entity' => 'phpwisdom_annotation_driver'
                )
            )
        )
    )    
);
