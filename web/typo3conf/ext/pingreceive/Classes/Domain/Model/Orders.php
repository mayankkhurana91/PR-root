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
 * Orders
 */
class Orders extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * orderid
     *
     * @var int
     */
    protected $orderid = 0;

    /**
     * address
     *
     * @var string
     */
    protected $address = '';

    /**
     * custname
     *
     * @var string
     */
    protected $custname = '';

    /**
     * custphone
     *
     * @var int
     */
    protected $custphone = 0;

    /**
     * dishes
     *
     * @var \PingAndReceiveExtention\Pingreceive\Domain\Model\Dishes
     */
    protected $dishes = null;

    /**
     * Returns the orderid
     *
     * @return int $orderid
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * Sets the orderid
     *
     * @param int $orderid
     * @return void
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;
    }

    /**
     * Returns the address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     *
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Returns the custname
     *
     * @return string $custname
     */
    public function getCustname()
    {
        return $this->custname;
    }

    /**
     * Sets the custname
     *
     * @param string $custname
     * @return void
     */
    public function setCustname($custname)
    {
        $this->custname = $custname;
    }

    /**
     * Returns the custphone
     *
     * @return int $custphone
     */
    public function getCustphone()
    {
        return $this->custphone;
    }

    /**
     * Sets the custphone
     *
     * @param int $custphone
     * @return void
     */
    public function setCustphone($custphone)
    {
        $this->custphone = $custphone;
    }

    /**
     * Returns the dishes
     *
     * @return \PingAndReceiveExtention\Pingreceive\Domain\Model\Dishes $dishes
     */
    public function getDishes()
    {
        return $this->dishes;
    }

    /**
     * Sets the dishes
     *
     * @param \PingAndReceiveExtention\Pingreceive\Domain\Model\Dishes $dishes
     * @return void
     */
    public function setDishes(\PingAndReceiveExtention\Pingreceive\Domain\Model\Dishes $dishes)
    {
        $this->dishes = $dishes;
    }
}
