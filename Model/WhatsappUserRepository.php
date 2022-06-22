<?php
/**
 * Copyright © Nilesh Dubey All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace NdCode\WhatsAppChatSystem\Model;

use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use NdCode\WhatsAppChatSystem\Api\Data\WhatsappUserInterface;
use NdCode\WhatsAppChatSystem\Api\Data\WhatsappUserInterfaceFactory;
use NdCode\WhatsAppChatSystem\Api\Data\WhatsappUserSearchResultsInterfaceFactory;
use NdCode\WhatsAppChatSystem\Api\WhatsappUserRepositoryInterface;
use NdCode\WhatsAppChatSystem\Model\ResourceModel\WhatsappUser as ResourceWhatsappUser;
use NdCode\WhatsAppChatSystem\Model\ResourceModel\WhatsappUser\CollectionFactory as WhatsappUserCollectionFactory;

class WhatsappUserRepository implements WhatsappUserRepositoryInterface
{

    /**
     * @var ResourceWhatsappUser
     */
    protected $resource;

    /**
     * @var WhatsappUserCollectionFactory
     */
    protected $whatsappUserCollectionFactory;

    /**
     * @var WhatsappUserInterfaceFactory
     */
    protected $whatsappUserFactory;

    /**
     * @var WhatsappUser
     */
    protected $searchResultsFactory;

    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;


    /**
     * @param ResourceWhatsappUser $resource
     * @param WhatsappUserInterfaceFactory $whatsappUserFactory
     * @param WhatsappUserCollectionFactory $whatsappUserCollectionFactory
     * @param WhatsappUserSearchResultsInterfaceFactory $searchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        ResourceWhatsappUser $resource,
        WhatsappUserInterfaceFactory $whatsappUserFactory,
        WhatsappUserCollectionFactory $whatsappUserCollectionFactory,
        WhatsappUserSearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->resource = $resource;
        $this->whatsappUserFactory = $whatsappUserFactory;
        $this->whatsappUserCollectionFactory = $whatsappUserCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(WhatsappUserInterface $whatsappUser)
    {
        try {
            $this->resource->save($whatsappUser);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the whatsappUser: %1',
                $exception->getMessage()
            ));
        }
        return $whatsappUser;
    }

    /**
     * @inheritDoc
     */
    public function get($whatsappUserId)
    {
        $whatsappUser = $this->whatsappUserFactory->create();
        $this->resource->load($whatsappUser, $whatsappUserId);
        if (!$whatsappUser->getId()) {
            throw new NoSuchEntityException(__('Whatsapp_User with id "%1" does not exist.', $whatsappUserId));
        }
        return $whatsappUser;
    }

    /**
     * @inheritDoc
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->whatsappUserCollectionFactory->create();
        
        $this->collectionProcessor->process($criteria, $collection);
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        
        $items = [];
        foreach ($collection as $model) {
            $items[] = $model;
        }
        
        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * @inheritDoc
     */
    public function delete(WhatsappUserInterface $whatsappUser)
    {
        try {
            $whatsappUserModel = $this->whatsappUserFactory->create();
            $this->resource->load($whatsappUserModel, $whatsappUser->getWhatsappUserId());
            $this->resource->delete($whatsappUserModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Whatsapp_User: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($whatsappUserId)
    {
        return $this->delete($this->get($whatsappUserId));
    }
}

