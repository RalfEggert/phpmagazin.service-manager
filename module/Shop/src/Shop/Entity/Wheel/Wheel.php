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
 * Class Wheel
 *
 * @package Shop\Entity\Wheel
 */
class Wheel implements WheelInterface
{
    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $size = null;

    /**
     * @param string $name
     * @param string $size
     */
    function __construct($name = null, $size = null)
    {
        $this->setName($name);
        $this->setSize($name);
    }

    /**
     * @param string $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->size;
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
}