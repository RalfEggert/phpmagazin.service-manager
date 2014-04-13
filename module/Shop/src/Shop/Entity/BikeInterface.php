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

use Shop\Entity\Bell\BellInterface;
use Shop\Entity\Wheel\WheelInterface;

/**
 * Bike interface
 *
 * @package Shop\Entity
 */
interface BikeInterface
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
     * @param string $colour
     */
    public function setColour($colour);

    /**
     * @return string
     */
    public function getColour();

    /**
     * @param \Shop\Entity\Bell\BellInterface $bell
     */
    public function setBell(BellInterface $bell);

    /**
     * @return \Shop\Entity\Bell\BellInterface
     */
    public function getBell();

    /**
     * @param \Shop\Entity\Wheel\WheelInterface $backWheel
     */
    public function setBackWheel(WheelInterface $backWheel);

    /**
     * @return \Shop\Entity\Wheel\WheelInterface
     */
    public function getBackWheel();

    /**
     * @param \Shop\Entity\Wheel\WheelInterface $frontWheel
     */
    public function setFrontWheel(WheelInterface $frontWheel);

    /**
     * @return \Shop\Entity\Wheel\WheelInterface
     */
    public function getFrontWheel();
}