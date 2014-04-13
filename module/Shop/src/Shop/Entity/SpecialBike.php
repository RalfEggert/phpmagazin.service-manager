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
use Shop\Entity\Wheel\Wheel12InchAwareInterface;

/**
 * Class SpecialBike
 *
 * @package Shop\Entity
 */
class SpecialBike extends Bike implements Wheel12InchAwareInterface
{
    /**
     * @param string        $name
     * @param string        $colour
     * @param BellInterface $bell
     */
    function __construct($name, $colour, BellInterface $bell)
    {
        $this->setName($name);
        $this->setColour($colour);
        $this->setBell($bell);
    }
}
