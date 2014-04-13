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

/**
 * Interface Wheel12InchAwareInterface
 *
 * @package Shop\Entity\Wheel
 */
interface Wheel12InchAwareInterface
{
    /**
     * @param WheelInterface $wheel
     *
     * @return void
     */
    public function setFrontWheel(WheelInterface $wheel);

    /**
     * @return WheelInterface
     */
    public function getFrontWheel();

    /**
     * @param WheelInterface $wheel
     *
     * @return void
     */
    public function setBackWheel(WheelInterface $wheel);

    /**
     * @return WheelInterface
     */
    public function getBackWheel();
}