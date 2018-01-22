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
 * DishesController
 */
class DishesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $dishes = $this->dishesRepository->findAll();
        $this->view->assign('dishes', $dishes);
    }

    /**
     * action show
     *
     * @param \PingAndReceiveExtention\Pingreceive\Domain\Model\Dishes $dishes
     * @return void
     */
    public function showAction(\PingAndReceiveExtention\Pingreceive\Domain\Model\Dishes $dishes)
    {
        $this->view->assign('dishes', $dishes);
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
     * @param \PingAndReceiveExtention\Pingreceive\Domain\Model\Dishes $newDishes
     * @return void
     */
    public function createAction(\PingAndReceiveExtention\Pingreceive\Domain\Model\Dishes $newDishes)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->dishesRepository->add($newDishes);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \PingAndReceiveExtention\Pingreceive\Domain\Model\Dishes $dishes
     * @ignorevalidation $dishes
     * @return void
     */
    public function editAction(\PingAndReceiveExtention\Pingreceive\Domain\Model\Dishes $dishes)
    {
        $this->view->assign('dishes', $dishes);
    }

    /**
     * action update
     *
     * @param \PingAndReceiveExtention\Pingreceive\Domain\Model\Dishes $dishes
     * @return void
     */
    public function updateAction(\PingAndReceiveExtention\Pingreceive\Domain\Model\Dishes $dishes)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->dishesRepository->update($dishes);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \PingAndReceiveExtention\Pingreceive\Domain\Model\Dishes $dishes
     * @return void
     */
    public function deleteAction(\PingAndReceiveExtention\Pingreceive\Domain\Model\Dishes $dishes)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->dishesRepository->remove($dishes);
        $this->redirect('list');
    }
}
