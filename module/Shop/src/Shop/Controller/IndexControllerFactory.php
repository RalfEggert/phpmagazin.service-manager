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
namespace Shop\Controller;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class IndexControllerFactory
 *
 * @package Shop\Controller
 */
class IndexControllerFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $controllerManager
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $controllerManager)
    {
        $serviceLocator = $controllerManager->getServiceLocator();

        $bellPrincess = $serviceLocator->get('PinkPrincessBell');
        $wheel10Inch  = $serviceLocator->get('10InchWheel');
        $wheel12Inch  = $serviceLocator->get('12InchWheel');
        $bikeSmall    = $serviceLocator->get('SmallPinkPrincessBike');
        $bikeMedium   = $serviceLocator->get('MediumPinkPrincessBike');
        $bikeSpecial  = $serviceLocator->get('SpecialBike');

        $controller = new IndexController();
        $controller->setPinkPrincessBellEntity($bellPrincess);
        $controller->setWheel10InchEntity($wheel10Inch);
        $controller->setWheel12InchEntity($wheel12Inch);
        $controller->setBikeSmallEntity($bikeSmall);
        $controller->setBikeMediumEntity($bikeMedium);
        $controller->setBikeSpecialEntity($bikeSpecial);

        return $controller;
    }
}