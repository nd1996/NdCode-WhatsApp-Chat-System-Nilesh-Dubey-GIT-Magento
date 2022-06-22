<?php
/**
 * Copyright © Nilesh Dubey All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace NdCode\WhatsAppChatSystem\Controller\Adminhtml\WhatsappUser;

use Magento\Framework\Exception\LocalizedException;

class Save extends \Magento\Backend\App\Action
{

    protected $dataPersistor;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor
    ) {
        $this->dataPersistor = $dataPersistor;
        parent::__construct($context);
    }

    /**
     * Save action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();

        if(isset($data['avatar'])){
            $data['avatar'] = json_encode($data['avatar']);
        }

        if ($data) {
            $id = $this->getRequest()->getParam('whatsapp_user_id');

            $model = $this->_objectManager->create(\NdCode\WhatsAppChatSystem\Model\WhatsappUser::class)->load($id);
            if (!$model->getId() && $id) {
                $this->messageManager->addErrorMessage(__('This Whatsapp User no longer exists.'));
                return $resultRedirect->setPath('*/*/');
            }

            $model->setData($data);

            try {
                $model->save();
                $this->messageManager->addSuccessMessage(__('You saved the Whatsapp User.'));
                $this->dataPersistor->clear('ndcode_whatsappchatsystem_whatsapp_user');

                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['whatsapp_user_id' => $model->getId()]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the Whatsapp User.'));
            }

            $this->dataPersistor->set('ndcode_whatsappchatsystem_whatsapp_user', $data);
            return $resultRedirect->setPath('*/*/edit', ['whatsapp_user_id' => $this->getRequest()->getParam('whatsapp_user_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}

