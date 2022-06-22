<?php
/**
 * Copyright © Nilesh Dubey All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace NdCode\WhatsAppChatSystem\Model;

use Magento\Framework\Model\AbstractModel;
use NdCode\WhatsAppChatSystem\Api\Data\WhatsappUserInterface;

class WhatsappUser extends AbstractModel implements WhatsappUserInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\NdCode\WhatsAppChatSystem\Model\ResourceModel\WhatsappUser::class);
    }

    /**
     * @inheritDoc
     */
    public function getWhatsappUserId()
    {
        return $this->getData(self::WHATSAPP_USER_ID);
    }

    /**
     * @inheritDoc
     */
    public function setWhatsappUserId($whatsappUserId)
    {
        return $this->setData(self::WHATSAPP_USER_ID, $whatsappUserId);
    }

    /**
     * @inheritDoc
     */
    public function getEnable()
    {
        return $this->getData(self::ENABLE);
    }

    /**
     * @inheritDoc
     */
    public function setEnable($enable)
    {
        return $this->setData(self::ENABLE, $enable);
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * @inheritDoc
     */
    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * @inheritDoc
     */
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    /**
     * @inheritDoc
     */
    public function getRole()
    {
        return $this->getData(self::ROLE);
    }

    /**
     * @inheritDoc
     */
    public function setRole($role)
    {
        return $this->setData(self::ROLE, $role);
    }

    /**
     * @inheritDoc
     */
    public function getWhatsappNumber()
    {
        return $this->getData(self::WHATSAPP_NUMBER);
    }

    /**
     * @inheritDoc
     */
    public function setWhatsappNumber($whatsappNumber)
    {
        return $this->setData(self::WHATSAPP_NUMBER, $whatsappNumber);
    }

    /**
     * @inheritDoc
     */
    public function getAvailabilitySunday()
    {
        return $this->getData(self::AVAILABILITY_SUNDAY);
    }

    /**
     * @inheritDoc
     */
    public function setAvailabilitySunday($availabilitySunday)
    {
        return $this->setData(self::AVAILABILITY_SUNDAY, $availabilitySunday);
    }

    /**
     * @inheritDoc
     */
    public function getAvailabilityMonday()
    {
        return $this->getData(self::AVAILABILITY_MONDAY);
    }

    /**
     * @inheritDoc
     */
    public function setAvailabilityMonday($availabilityMonday)
    {
        return $this->setData(self::AVAILABILITY_MONDAY, $availabilityMonday);
    }

    /**
     * @inheritDoc
     */
    public function getAvailabilityTuesday()
    {
        return $this->getData(self::AVAILABILITY_TUESDAY);
    }

    /**
     * @inheritDoc
     */
    public function setAvailabilityTuesday($availabilityTuesday)
    {
        return $this->setData(self::AVAILABILITY_TUESDAY, $availabilityTuesday);
    }

    /**
     * @inheritDoc
     */
    public function getAvailabilityWenesday()
    {
        return $this->getData(self::AVAILABILITY_WEDNESDAY);
    }

    /**
     * @inheritDoc
     */
    public function setAvailabilityWenesday($availabilityWednesday)
    {
        return $this->setData(self::AVAILABILITY_WEDNESDAY, $availabilityWednesday);
    }

    /**
     * @inheritDoc
     */
    public function getAvailabilityThusday()
    {
        return $this->getData(self::AVAILABILITY_THURSDAY);
    }

    /**
     * @inheritDoc
     */
    public function setAvailabilityThusday($availabilityThusday)
    {
        return $this->setData(self::AVAILABILITY_THURSDAY, $availabilityThusday);
    }

    /**
     * @inheritDoc
     */
    public function getAvailabilityFriday()
    {
        return $this->getData(self::AVAILABILITY_FRIDAY);
    }

    /**
     * @inheritDoc
     */
    public function setAvailabilityFriday($availabilityFriday)
    {
        return $this->setData(self::AVAILABILITY_FRIDAY, $availabilityFriday);
    }

    /**
     * @inheritDoc
     */
    public function getAvailabilitySaturday()
    {
        return $this->getData(self::AVAILABILITY_SATURDAY);
    }

    /**
     * @inheritDoc
     */
    public function setAvailabilitySaturday($availabilitySaturday)
    {
        return $this->setData(self::AVAILABILITY_SATURDAY, $availabilitySaturday);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * @inheritDoc
     */
    public function getModifiedAt()
    {
        return $this->getData(self::MODIFIED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setModifiedAt($modifiedAt)
    {
        return $this->setData(self::MODIFIED_AT, $modifiedAt);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedBy()
    {
        return $this->getData(self::CREATED_BY);
    }

    /**
     * @inheritDoc
     */
    public function setCreatedBy($createdBy)
    {
        return $this->setData(self::CREATED_BY, $createdBy);
    }

    /**
     * @inheritDoc
     */
    public function getLastModifiedBy()
    {
        return $this->getData(self::LAST_MODIFIED_BY);
    }

    /**
     * @inheritDoc
     */
    public function setLastModifiedBy($lastModifiedBy)
    {
        return $this->setData(self::LAST_MODIFIED_BY, $lastModifiedBy);
    }

    /**
     * @inheritDoc
     */
    public function getAvatar()
    {
        return $this->getData(self::AVATAR);
    }

    /**
     * @inheritDoc
     */
    public function setAvatar($avatar)
    {
        return $this->setData(self::AVATAR, $avatar);
    }
}

