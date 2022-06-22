<?php
/**
 * Copyright © Nilesh Dubey All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace NdCode\WhatsAppChatSystem\Controller\Adminhtml\WhatsappUser;

class Delete extends \NdCode\WhatsAppChatSystem\Controller\Adminhtml\WhatsappUser
{

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        // check if we know what should be deleted
        $id = $this->getRequest()->getParam('whatsapp_user_id');
        if ($id) {
            try {
                // init model and delete
                $model = $this->_objectManager->create(\NdCode\WhatsAppChatSystem\Model\WhatsappUser::class);
                $model->load($id);
                $model->delete();
                // display success message
                $this->messageManager->addSuccessMessage(__('You deleted the Whatsapp User.'));
                // go to grid
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addErrorMessage($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['whatsapp_user_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addErrorMessage(__('We can\'t find a Whatsapp User to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');
    }
}

