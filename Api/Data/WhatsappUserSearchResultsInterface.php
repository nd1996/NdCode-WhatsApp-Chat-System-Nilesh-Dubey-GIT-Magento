<?php
/**
 * Copyright © Nilesh Dubey All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace NdCode\WhatsAppChatSystem\Api\Data;

interface WhatsappUserSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Whatsapp_User list.
     * @return \NdCode\WhatsAppChatSystem\Api\Data\WhatsappUserInterface[]
     */
    public function getItems();

    /**
     * Set enable list.
     * @param \NdCode\WhatsAppChatSystem\Api\Data\WhatsappUserInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

