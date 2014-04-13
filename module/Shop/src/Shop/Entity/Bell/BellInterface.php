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
namespace Shop\Entity\Bell;

/**
 * Bell Interface
 *
 * @package Shop\Entity\Bell
 */
interface BellInterface
{
    /**
     * @param string $colour
     */
    public function setColour($colour);

    /**
     * @return string
     */
    public function getColour();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();
} 