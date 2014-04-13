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

use Shop\Entity\BikeInterface;
use Zend\View\Helper\AbstractHelper;
use Zend\View\Model\ViewModel;

/**
 * Class SmallPinkPrincessBike
 *
 * @package Shop\View\Helper
 */
class SmallPinkPrincessBike extends AbstractHelper
{
    /**
     * @var BikeInterface
     */
    protected $entity = null;

    /**
     * @param \Shop\Entity\BikeInterface $entity
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;
    }

    /**
     * @return \Shop\Entity\BikeInterface
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * @return string
     */
    function __invoke()
    {
        $viewModel = new ViewModel();
        $viewModel->setVariable('entity', $this->getEntity());
        $viewModel->setTemplate('shop/widget/small-pink-princess-bike');

        return $this->getView()->render($viewModel);
    }

}