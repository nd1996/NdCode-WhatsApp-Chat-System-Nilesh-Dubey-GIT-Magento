<?php
/**
 * Copyright © Nilesh Dubey All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace NdCode\WhatsAppChatSystem\Model\ResourceModel\WhatsappUser;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'whatsapp_user_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \NdCode\WhatsAppChatSystem\Model\WhatsappUser::class,
            \NdCode\WhatsAppChatSystem\Model\ResourceModel\WhatsappUser::class
        );
    }
}

