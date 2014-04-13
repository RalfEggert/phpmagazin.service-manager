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
namespace Shop\Entity\Wheel;

use Zend\ServiceManager\InitializerInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class Wheel12InchInitializer
 *
 * @package Shop\Entity\Wheel
 */
class Wheel12InchInitializer implements InitializerInterface
{
    /**
     * Initialize
     *
     * @param                         $instance
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return mixed
     */
    public function initialize($instance, ServiceLocatorInterface $serviceLocator)
    {
        if ($instance instanceof Wheel12InchAwareInterface) {
            $frontWheel = $serviceLocator->get('12InchWheel');
            $backWheel = $serviceLocator->get('12InchWheel');

            $instance->setFrontWheel($frontWheel);
            $instance->setBackWheel($backWheel);
        }
    }

} 