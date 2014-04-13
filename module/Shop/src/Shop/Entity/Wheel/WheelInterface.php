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
namespace Shop\Entity\Wheel;

/**
 * Wheel Interface
 *
 * @package Shop\Entity\Wheel
 */
interface WheelInterface
{
    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();
    
    /**
     * @param string $size
     */
    public function setSize($size);

    /**
     * @return string
     */
    public function getSize();
}