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
 * Class MediumPinkPrincessBikeEntityFactory
 *
 * @package Shop\Entity
 */
class MediumPinkPrincessBikeFactory implements FactoryInterface
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
        $frontWheel = $serviceLocator->get('12InchWheel');
        $backWheel  = $serviceLocator->get('12InchWheel');

        $bike = new Bike(
            'MediumPrincessBike', 'pink', $bell, $frontWheel, $backWheel
        );

        return $bike;
    }

} 