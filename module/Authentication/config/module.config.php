<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Authentication;

return array(
    'controllers' => array(
        'invokables' => array(
            'Authentication\Controller\Login' => 'Authentication\Controller\LoginController',
        )
    ),
    'router' => array(
        'routes' => array(
            'authentication' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/authentication',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Authentication\Controller',
                        'controller' => 'login',
                        'action' => 'login',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/:action[/:id]]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'authentication' => __DIR__ . '/../view',
        ),
        'display_exceptions' => true,
    ),
    // Doctrine configuration
    'doctrine' => array(
        'authentication' => array(
            'orm_default' => array(
                'object_manager' => 'Doctrine\ORM\EntityManager',
                'identity_class' => 'Database\Entity\User',
                'identity_property' => 'userName',
                'credential_property' => 'userPassword',
                'credential_callable' => function(
                    \Database\Entity\User $user, $passGiven) {
                    
                    $bcrypt = new \Zend\Crypt\Password\Bcrypt();
                    $bcrypt->setSalt($user->getUserPasswordSalt());
                    $isUser = $bcrypt->verify($passGiven, $user->getUserPassword());
                    
                    if ($isUser && $user->getUserActive()) {
                        return true;
                    }
                    return false;
                },
            ),
        ),
//        'driver' => array(
//            // defines an annotation driver with two paths, and names it
//            __NAMESPACE__ . '_driver' => array(
//                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
//                'cache' => 'array',
//                'paths' => array(
//                    __DIR__ . '/../src/' . __NAMESPACE__ . '/Entity',
//                ),
//            ),
//            // default metadata driver, aggregates all other drivers into a single one.
//            // Override `orm_default` only if you know what you're doing
//            'orm_default' => array(
//                'drivers' => array(
//                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver',
//                )
//            ),
//        ),
    ),
    'session' => array(
        'config' => array(
            'class' => 'Zend\Session\Config\SessionConfig',
            'options' => array(
                'name' => 'familiacats',
                'use_cookies' => true,
                'cookie_lifetime' => 0,
                'cookie_httponly' => true,
                'cookie_secure' => false,
                'remember_me_seconds' => 1800, // remember me for 12 hours
                'gc_maxlifetime' => 1800,
            )
        ),
        'storage' => 'Zend\Session\Storage\SessionArrayStorage',
        'validators' => array(
            array(
                'Zend\Session\Validator\RemoteAddr',
                'Zend\Session\Validator\HttpUserAgent',
            )
        )
    )
);