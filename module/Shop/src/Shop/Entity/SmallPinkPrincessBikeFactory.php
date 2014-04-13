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

/**
 * namespace definition and usage
 */
namespace Shop\Entity;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class SmallPinkPrincessBikeEntityFactory
 *
 * @package Shop\Entity
 */
class SmallPinkPrincessBikeFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $bell       = $serviceLocator->get('PinkPrincessBell');
        $frontWheel = $serviceLocator->get('10InchWheel');
        $backWheel  = $serviceLocator->get('10InchWheel');

        $bike = new Bike(
            'SmallPrincessBike', 'pink', $bell, $frontWheel, $backWheel
        );

        return $bike;
    }

} 