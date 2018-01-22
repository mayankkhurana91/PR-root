<?php
namespace PingAndReceiveExtention\Pingreceive\Domain\Model;

/***
 *
 * This file is part of the "PingAndReceiveExtention" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Mayank Khurana <mayank.khurana@hof-university.de>, Hochschule Hof
 *
 ***/

/**
 * Dishes
 */
class Dishes extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * dishtype
     *
     * @var string
     */
    protected $dishtype = '';

    /**
     * quantity
     *
     * @var int
     */
    protected $quantity = 0;

    /**
     * dishid
     *
     * @var int
     */
    protected $dishid = 0;

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * Returns the dishtype
     *
     * @return string $dishtype
     */
    public function getDishtype()
    {
        return $this->dishtype;
    }

    /**
     * Sets the dishtype
     *
     * @param string $dishtype
     * @return void
     */
    public function setDishtype($dishtype)
    {
        $this->dishtype = $dishtype;
    }

    /**
     * Returns the quantity
     *
     * @return int $quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets the quantity
     *
     * @param int $quantity
     * @return void
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns the dishid
     *
     * @return int $dishid
     */
    public function getDishid()
    {
        return $this->dishid;
    }

    /**
     * Sets the dishid
     *
     * @param int $dishid
     * @return void
     */
    public function setDishid($dishid)
    {
        $this->dishid = $dishid;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
