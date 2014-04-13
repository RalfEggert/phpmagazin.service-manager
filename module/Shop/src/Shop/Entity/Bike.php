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
 * Class Bike
 *
 * @package Shop\Entity
 */
class Bike implements BikeInterface
{
    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $colour = null;

    /**
     * @var BellInterface
     */
    protected $bell = null;

    /**
     * @var WheelInterface
     */
    protected $frontWheel = null;

    /**
     * @var WheelInterface
     */
    protected $backWheel = null;

    /**
     * @param string         $name
     * @param string         $colour
     * @param BellInterface  $bell
     * @param WheelInterface $frontWheel
     * @param WheelInterface $backWheel
     */
    function __construct(
        $name, $colour, BellInterface $bell, WheelInterface $frontWheel,
        WheelInterface $backWheel
    ) {
        $this->setName($name);
        $this->setColour($colour);
        $this->setBell($bell);
        $this->setFrontWheel($frontWheel);
        $this->setBackWheel($backWheel);
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $colour
     */
    public function setColour($colour)
    {
        $this->colour = $colour;
    }

    /**
     * @return string
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * @param \Shop\Entity\Bell\BellInterface $bell
     */
    public function setBell(BellInterface $bell)
    {
        $this->bell = $bell;
    }

    /**
     * @return \Shop\Entity\Bell\BellInterface
     */
    public function getBell()
    {
        return $this->bell;
    }

    /**
     * @param \Shop\Entity\Wheel\WheelInterface $backWheel
     */
    public function setBackWheel(WheelInterface $backWheel)
    {
        $this->backWheel = $backWheel;
    }

    /**
     * @return \Shop\Entity\Wheel\WheelInterface
     */
    public function getBackWheel()
    {
        return $this->backWheel;
    }

    /**
     * @param \Shop\Entity\Wheel\WheelInterface $frontWheel
     */
    public function setFrontWheel(WheelInterface $frontWheel)
    {
        $this->frontWheel = $frontWheel;
    }

    /**
     * @return \Shop\Entity\Wheel\WheelInterface
     */
    public function getFrontWheel()
    {
        return $this->frontWheel;
    }
}