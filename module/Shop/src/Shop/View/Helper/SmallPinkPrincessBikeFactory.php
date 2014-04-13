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
namespace Shop\View\Helper;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class SmallPinkPrincessBikeFactory
 *
 * @package Shop\View\Helper
 */
class SmallPinkPrincessBikeFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $viewHelperManager
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $viewHelperManager)
    {
        $serviceLocator = $viewHelperManager->getServiceLocator();

        $entity = $serviceLocator->get('SmallPinkPrincessBike');

        $helper = new SmallPinkPrincessBike();
        $helper->setEntity($entity);

        return $helper;
    }
}