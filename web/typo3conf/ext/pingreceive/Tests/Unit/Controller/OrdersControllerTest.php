<?php
namespace PingAndReceiveExtention\Pingreceive\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Mayank Khurana <mayank.khurana@hof-university.de>
 */
class OrdersControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \PingAndReceiveExtention\Pingreceive\Controller\OrdersController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\PingAndReceiveExtention\Pingreceive\Controller\OrdersController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllOrderssFromRepositoryAndAssignsThemToView()
    {

        $allOrderss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $ordersRepository = $this->getMockBuilder(\PingAndReceiveExtention\Pingreceive\Domain\Repository\OrdersRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $ordersRepository->expects(self::once())->method('findAll')->will(self::returnValue($allOrderss));
        $this->inject($this->subject, 'ordersRepository', $ordersRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('orderss', $allOrderss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenOrdersToView()
    {
        $orders = new \PingAndReceiveExtention\Pingreceive\Domain\Model\Orders();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('orders', $orders);

        $this->subject->showAction($orders);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenOrdersToOrdersRepository()
    {
        $orders = new \PingAndReceiveExtention\Pingreceive\Domain\Model\Orders();

        $ordersRepository = $this->getMockBuilder(\PingAndReceiveExtention\Pingreceive\Domain\Repository\OrdersRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $ordersRepository->expects(self::once())->method('add')->with($orders);
        $this->inject($this->subject, 'ordersRepository', $ordersRepository);

        $this->subject->createAction($orders);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenOrdersToView()
    {
        $orders = new \PingAndReceiveExtention\Pingreceive\Domain\Model\Orders();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('orders', $orders);

        $this->subject->editAction($orders);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenOrdersInOrdersRepository()
    {
        $orders = new \PingAndReceiveExtention\Pingreceive\Domain\Model\Orders();

        $ordersRepository = $this->getMockBuilder(\PingAndReceiveExtention\Pingreceive\Domain\Repository\OrdersRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $ordersRepository->expects(self::once())->method('update')->with($orders);
        $this->inject($this->subject, 'ordersRepository', $ordersRepository);

        $this->subject->updateAction($orders);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenOrdersFromOrdersRepository()
    {
        $orders = new \PingAndReceiveExtention\Pingreceive\Domain\Model\Orders();

        $ordersRepository = $this->getMockBuilder(\PingAndReceiveExtention\Pingreceive\Domain\Repository\OrdersRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $ordersRepository->expects(self::once())->method('remove')->with($orders);
        $this->inject($this->subject, 'ordersRepository', $ordersRepository);

        $this->subject->deleteAction($orders);
    }
}
