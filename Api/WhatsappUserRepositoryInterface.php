<?php
/**
 * Copyright © Nilesh Dubey All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace NdCode\WhatsAppChatSystem\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface WhatsappUserRepositoryInterface
{

    /**
     * Save Whatsapp_User
     * @param \NdCode\WhatsAppChatSystem\Api\Data\WhatsappUserInterface $whatsappUser
     * @return \NdCode\WhatsAppChatSystem\Api\Data\WhatsappUserInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \NdCode\WhatsAppChatSystem\Api\Data\WhatsappUserInterface $whatsappUser
    );

    /**
     * Retrieve Whatsapp_User
     * @param string $whatsappUserId
     * @return \NdCode\WhatsAppChatSystem\Api\Data\WhatsappUserInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($whatsappUserId);

    /**
     * Retrieve Whatsapp_User matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \NdCode\WhatsAppChatSystem\Api\Data\WhatsappUserSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Whatsapp_User
     * @param \NdCode\WhatsAppChatSystem\Api\Data\WhatsappUserInterface $whatsappUser
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \NdCode\WhatsAppChatSystem\Api\Data\WhatsappUserInterface $whatsappUser
    );

    /**
     * Delete Whatsapp_User by ID
     * @param string $whatsappUserId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($whatsappUserId);
}

