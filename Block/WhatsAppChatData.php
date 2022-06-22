<?php
/**
 * Copyright © Nilesh Dubey All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace NdCode\WhatsAppChatSystem\Block;

use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Store\Model\ScopeInterface;
use NdCode\WhatsAppChatSystem\Api\WhatsappUserRepositoryInterface;

class WhatsAppChatData extends Template
{

    const XML_PATH_IF_SINGLE = "whatsapp_chat/general/if_single";
    const XML_PATH_TIMEZONE = "general/locale/timezone";
    const XML_PATH_EFFECT = "whatsapp_chat/general/effect";

    private SearchCriteriaBuilder $searchCriteriaBuilder;
    private WhatsappUserRepositoryInterface $whatsappUserRepository;

    /**
     * Constructor
     *
     * @param Context $context
     * @param WhatsappUserRepositoryInterface $whatsappUserRepository
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     * @param array $data
     */
    public function __construct(
        Context $context,
        WhatsappUserRepositoryInterface $whatsappUserRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->whatsappUserRepository = $whatsappUserRepository;
    }

    /**
     * @return array
     */
    public function getActiveUser(): array
    {
        $returnArray = [];
        $searchCriteria = $this->searchCriteriaBuilder
            ->addFilter('enable', 1);

        $searchCriteria = $searchCriteria->create();
        try {
            $searchResult = $this->whatsappUserRepository->getList($searchCriteria);
            if ($searchResult->getTotalCount() > 0) {
                foreach ($searchResult->getItems() as $item) {
                    $returnArray[] = $item->getData();
                }
            }
        } catch (LocalizedException $e) {
            $this->_logger->error(__($e->getMessage()), $e->getTrace());
        }
        return $returnArray;
    }

    public function getConfigData(string $path)
    {
        return $this->_scopeConfig->getValue($path, ScopeInterface::SCOPE_STORE);
    }

    public function isButton(): bool
    {
        return (string) $this->getConfigData(self::XML_PATH_IF_SINGLE) == "button";
    }

    public function getEffect(): int
    {
        return (int) $this->getConfigData(self::XML_PATH_EFFECT);
    }

    public function getStoreTimeZone(): string
    {
        $timeZone = (string) $this->getConfigData(self::XML_PATH_TIMEZONE);
        return $timeZone ? $timeZone : "America/Chicago";
    }

    public function getAvailabilityJsonEncode(array $data = []): string
    {
        return json_encode($data);
    }

    public function getAvailabilityArray(array $getActiveUser)
    {
        return [
            "sunday" => $getActiveUser['availability_sunday'] ?? "00:00-00:00",
            "monday" => $getActiveUser['availability_monday'] ?? "00:00-00:00",
            "tuesday" => $getActiveUser['availability_tuesday'] ?? "00:00-00:00",
            "wednesday" => $getActiveUser['availability_wednesday'] ?? "00:00-00:00",
            "thursday" => $getActiveUser['availability_thursday'] ?? "00:00-00:00",
            "friday" => $getActiveUser['availability_friday'] ?? "00:00-00:00",
            "saturday" => $getActiveUser['availability_saturday'] ?? "00:00-00:00",
        ];
    }

    /**
     * @throws NoSuchEntityException
     */
    public function getProperImageUrl($imageData = ''): string
    {
        if(empty($imageData)) return '';
        /*  if you are u    sing 127.0.0.1 as host */
        $mediaUrl = $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        $mediaArray = json_decode($imageData);
        $explodeBaseUrl = explode( "/", $mediaUrl);
        $imageUrl = str_ireplace($explodeBaseUrl, '', (string)($mediaArray[0])->url);
        return $mediaUrl . $imageUrl;
    }

}
