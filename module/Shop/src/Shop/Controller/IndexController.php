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
namespace Shop\Controller;

use Shop\Entity\Bell\BellInterface;
use Shop\Entity\BikeInterface;
use Shop\Entity\Wheel\WheelInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class IndexController
 *
 * @package Shop
 */
class IndexController extends AbstractActionController
{
    /**
     * @var BellInterface
     */
    protected $pinkPrincessBellEntity = null;

    /**
     * @var WheelInterface
     */
    protected $wheel10InchEntity = null;

    /**
     * @var WheelInterface
     */
    protected $wheel12InchEntity = null;

    /**
     * @var BikeInterface
     */
    protected $bikeSmallEntity = null;

    /**
     * @var BikeInterface
     */
    protected $bikeMediumEntity = null;

    /**
     * @var BikeInterface
     */
    protected $bikeSpecialEntity = null;

    /**
     * @param \Shop\Entity\Bell\BellInterface $pinkPrincessBellEntity
     */
    public function setPinkPrincessBellEntity($pinkPrincessBellEntity)
    {
        $this->pinkPrincessBellEntity = $pinkPrincessBellEntity;
    }

    /**
     * @return \Shop\Entity\Bell\BellInterface
     */
    public function getPinkPrincessBellEntity()
    {
        return $this->pinkPrincessBellEntity;
    }

    /**
     * @param \Shop\Entity\Wheel\WheelInterface $wheel10InchEntity
     */
    public function setWheel10InchEntity($wheel10InchEntity)
    {
        $this->wheel10InchEntity = $wheel10InchEntity;
    }

    /**
     * @return \Shop\Entity\Wheel\WheelInterface
     */
    public function getWheel10InchEntity()
    {
        return $this->wheel10InchEntity;
    }

    /**
     * @param \Shop\Entity\Wheel\WheelInterface $wheel12InchEntity
     */
    public function setWheel12InchEntity($wheel12InchEntity)
    {
        $this->wheel12InchEntity = $wheel12InchEntity;
    }

    /**
     * @return \Shop\Entity\Wheel\WheelInterface
     */
    public function getWheel12InchEntity()
    {
        return $this->wheel12InchEntity;
    }

    /**
     * @param \Shop\Entity\BikeInterface $bikeSmallEntity
     */
    public function setBikeSmallEntity($bikeSmallEntity)
    {
        $this->bikeSmallEntity = $bikeSmallEntity;
    }

    /**
     * @return \Shop\Entity\BikeInterface
     */
    public function getBikeSmallEntity()
    {
        return $this->bikeSmallEntity;
    }

    /**
     * @param \Shop\Entity\BikeInterface $bikeMediumEntity
     */
    public function setBikeMediumEntity($bikeMediumEntity)
    {
        $this->bikeMediumEntity = $bikeMediumEntity;
    }

    /**
     * @return \Shop\Entity\BikeInterface
     */
    public function getBikeMediumEntity()
    {
        return $this->bikeMediumEntity;
    }

    /**
     * @param \Shop\Entity\BikeInterface $bikeSpecialEntity
     */
    public function setBikeSpecialEntity($bikeSpecialEntity)
    {
        $this->bikeSpecialEntity = $bikeSpecialEntity;
    }

    /**
     * @return \Shop\Entity\BikeInterface
     */
    public function getBikeSpecialEntity()
    {
        return $this->bikeSpecialEntity;
    }

    /**
     * Method indexAction
     */
    public function indexAction()
    {
        return new ViewModel(
            array(
                'bellPrincess' => $this->getPinkPrincessBellEntity(),
                'wheel10Inch'  => $this->getWheel10InchEntity(),
                'wheel12Inch'  => $this->getWheel12InchEntity(),
                'bikeSmall'    => $this->getBikeSmallEntity(),
                'bikeMedium'   => $this->getBikeMediumEntity(),
            )
        );
    }

    /**
     * Method showAction
     */
    public function showAction()
    {
        return new ViewModel(array());
    }

    /**
     * Method specialAction
     */
    public function specialAction()
    {
        return new ViewModel(
            array(
                'bikeSpecial'  => $this->getBikeSpecialEntity(),
            )
        );
    }
}

