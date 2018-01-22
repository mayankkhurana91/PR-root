<?php
namespace PingAndReceiveExtention\Pingreceive\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Mayank Khurana <mayank.khurana@hof-university.de>
 */
class DishesTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \PingAndReceiveExtention\Pingreceive\Domain\Model\Dishes
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PingAndReceiveExtention\Pingreceive\Domain\Model\Dishes();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getDishtypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDishtype()
        );
    }

    /**
     * @test
     */
    public function setDishtypeForStringSetsDishtype()
    {
        $this->subject->setDishtype('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'dishtype',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getQuantityReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getQuantity()
        );
    }

    /**
     * @test
     */
    public function setQuantityForIntSetsQuantity()
    {
        $this->subject->setQuantity(12);

        self::assertAttributeEquals(
            12,
            'quantity',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDishidReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getDishid()
        );
    }

    /**
     * @test
     */
    public function setDishidForIntSetsDishid()
    {
        $this->subject->setDishid(12);

        self::assertAttributeEquals(
            12,
            'dishid',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }
}
