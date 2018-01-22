<?php
namespace PingAndReceiveExtention\Pingreceive\Controller;

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
 * OrdersController
 */
class OrdersController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * ordersRepository
     *
     * @var \PingAndReceiveExtention\Pingreceive\Domain\Repository\OrdersRepository
     * @inject
     */
    protected $ordersRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $orders = $this->ordersRepository->findAll();
        $this->view->assign('orders', $orders);
    }

    /**
     * action show
     *
     * @param \PingAndReceiveExtention\Pingreceive\Domain\Model\Orders $orders
     * @return void
     */
    public function showAction(\PingAndReceiveExtention\Pingreceive\Domain\Model\Orders $orders)
    {
        $this->view->assign('orders', $orders);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \PingAndReceiveExtention\Pingreceive\Domain\Model\Orders $newOrders
     * @return void
     */
    public function createAction(\PingAndReceiveExtention\Pingreceive\Domain\Model\Orders $newOrders)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->ordersRepository->add($newOrders);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \PingAndReceiveExtention\Pingreceive\Domain\Model\Orders $orders
     * @ignorevalidation $orders
     * @return void
     */
    public function editAction(\PingAndReceiveExtention\Pingreceive\Domain\Model\Orders $orders)
    {
        $this->view->assign('orders', $orders);
    }

    /**
     * action update
     *
     * @param \PingAndReceiveExtention\Pingreceive\Domain\Model\Orders $orders
     * @return void
     */
    public function updateAction(\PingAndReceiveExtention\Pingreceive\Domain\Model\Orders $orders)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->ordersRepository->update($orders);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \PingAndReceiveExtention\Pingreceive\Domain\Model\Orders $orders
     * @return void
     */
    public function deleteAction(\PingAndReceiveExtention\Pingreceive\Domain\Model\Orders $orders)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->ordersRepository->remove($orders);
        $this->redirect('list');
    }
}
