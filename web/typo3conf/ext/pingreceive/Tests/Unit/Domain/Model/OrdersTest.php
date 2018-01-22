<?php
namespace PingAndReceiveExtention\Pingreceive\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Mayank Khurana <mayank.khurana@hof-university.de>
 */
class OrdersTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \PingAndReceiveExtention\Pingreceive\Domain\Model\Orders
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PingAndReceiveExtention\Pingreceive\Domain\Model\Orders();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getOrderidReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getOrderid()
        );
    }

    /**
     * @test
     */
    public function setOrderidForIntSetsOrderid()
    {
        $this->subject->setOrderid(12);

        self::assertAttributeEquals(
            12,
            'orderid',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCustnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCustname()
        );
    }

    /**
     * @test
     */
    public function setCustnameForStringSetsCustname()
    {
        $this->subject->setCustname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'custname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCustphoneReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getCustphone()
        );
    }

    /**
     * @test
     */
    public function setCustphoneForIntSetsCustphone()
    {
        $this->subject->setCustphone(12);

        self::assertAttributeEquals(
            12,
            'custphone',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDishesReturnsInitialValueForDishes()
    {
        self::assertEquals(
            null,
            $this->subject->getDishes()
        );
    }

    /**
     * @test
     */
    public function setDishesForDishesSetsDishes()
    {
        $dishesFixture = new \PingAndReceiveExtention\Pingreceive\Domain\Model\Dishes();
        $this->subject->setDishes($dishesFixture);

        self::assertAttributeEquals(
            $dishesFixture,
            'dishes',
            $this->subject
        );
    }
}
