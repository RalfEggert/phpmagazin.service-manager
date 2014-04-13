<?php
/**
 * Zend Framework 2 - PHP-Magazin Service-Manager
 *
 * Beispiele für ZF2 Service-Manager
 *
 * @package    Shop
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @link       http://www.ralfeggert.de/
 */
use Shop\Entity\Wheel\Wheel;

return array(
    'controllers'     => array(
        'factories' => array(
            'Shop\Controller\Index' => 'Shop\Controller\IndexControllerFactory',
        ),
    ),
    'view_helpers'     => array(
        'factories' => array(
            'shopSmallPinkPrincessBike' => 'Shop\View\Helper\SmallPinkPrincessBikeFactory',
        ),
    ),
    'view_manager'    => array(
        'template_path_stack' => array(
            __DIR__ . '/../view'
        )
    ),
    'router'          => array(
        'routes' => array(
            'shop' => array(
                'type'          => 'Literal',
                'options'       => array(
                    'route'    => '/shop',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Shop\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index'
                    )
                ),
                'may_terminate' => true,
                'child_routes'  => array(
                    'index' => array(
                        'type'    => 'segment',
                        'options' => array(
                            'route'       => '/index[/:action[/:id]]',
                            'defaults'    => array(
                                'controller' => 'Index'
                            ),
                            'constraints' => array(
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'     => '[0-9_-]*'
                            )
                        )
                    )
                )
            )
        )
    ),
    'service_manager' => array(
        'invokables' => array(
            'Shop\Entity\Bell\PinkPrincessBell' => 'Shop\Entity\Bell\PinkPrincessBell',
        ),
        'factories'  => array(
            'Shop\Entity\Wheel\10InchWheel'      => function ($serviceManager) {
                    $wheel = new Wheel('10inch', 10);

                    return $wheel;
                },
            'Shop\Entity\Wheel\12InchWheel'      => function ($serviceManager) {
                    $wheel = new Wheel('12inch', 12);

                    return $wheel;
                },
            'Shop\Entity\SmallPinkPrincessBike'  => 'Shop\Entity\SmallPinkPrincessBikeFactory',
            'Shop\Entity\MediumPinkPrincessBike' => 'Shop\Entity\MediumPinkPrincessBikeFactory',
            'Shop\Entity\SpecialBike'            => 'Shop\Entity\SpecialBikeFactory',
        ),
        'aliases'    => array(
            'PinkPrincessBell'       => 'Shop\Entity\Bell\PinkPrincessBell',
            '10InchWheel'            => 'Shop\Entity\Wheel\10InchWheel',
            '12InchWheel'            => 'Shop\Entity\Wheel\12InchWheel',
            'SmallPinkPrincessBike'  => 'Shop\Entity\SmallPinkPrincessBike',
            'MediumPinkPrincessBike' => 'Shop\Entity\MediumPinkPrincessBike',
            'SpecialBike'            => 'Shop\Entity\SpecialBike',
        ),
        'shared'     => array(
            'Shop\Entity\Wheel\10InchWheel' => false,
            'Shop\Entity\Wheel\12InchWheel' => false,
        ),
        'initializers' => array(
            'Shop\Entity\Wheel\Wheel12InchInitializer',
        ),
    ),
);
