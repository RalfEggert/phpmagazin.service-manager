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
namespace Shop\Entity\Bell;


/**
 * Class PinkPrincessBell
 *
 * @package Shop\Entity\Bell
 */
class PinkPrincessBell implements BellInterface
{
    /**
     * @var string
     */
    protected $name = 'princess';

    /**
     * @var string
     */
    protected $colour = 'pink';

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