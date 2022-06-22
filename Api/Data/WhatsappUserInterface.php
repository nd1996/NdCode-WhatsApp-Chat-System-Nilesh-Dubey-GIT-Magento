<?php
/**
 * Copyright © Nilesh Dubey All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace NdCode\WhatsAppChatSystem\Api\Data;

interface WhatsappUserInterface
{

    const ENABLE = 'enable';
    const AVAILABILITY_TUESDAY = 'availability_tuesday';
    const LAST_MODIFIED_BY = 'last_modified_by';
    const WHATSAPP_USER_ID = 'whatsapp_user_id';
    const AVAILABILITY_THURSDAY = 'availability_thursday';
    const NAME = 'name';
    const WHATSAPP_NUMBER = 'whatsapp_number';
    const CREATED_BY = 'created_by';
    const AVATAR = 'avatar';
    const DESCRIPTION = 'description';
    const AVAILABILITY_SATURDAY = 'availability_saturday';
    const AVAILABILITY_SUNDAY = 'availability_sunday';
    const AVAILABILITY_FRIDAY = 'availability_friday';
    const CREATED_AT = 'created_at';
    const MODIFIED_AT = 'modified_at';
    const AVAILABILITY_MONDAY = 'availability_monday';
    const AVAILABILITY_WEDNESDAY = 'availability_wednesday';
    const ROLE = 'role';

    /**
     * Get whatsapp_user_id
     * @return string|null
     */
    public function getWhatsappUserId();

    /**
     * Set whatsapp_user_id
     * @param string $whatsappUserId
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setWhatsappUserId($whatsappUserId);

    /**
     * Get enable
     * @return string|null
     */
    public function getEnable();

    /**
     * Set enable
     * @param string $enable
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setEnable($enable);

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setName($name);

    /**
     * Get description
     * @return string|null
     */
    public function getDescription();

    /**
     * Set description
     * @param string $description
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setDescription($description);

    /**
     * Get role
     * @return string|null
     */
    public function getRole();

    /**
     * Set role
     * @param string $role
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setRole($role);

    /**
     * Get whatsapp_number
     * @return string|null
     */
    public function getWhatsappNumber();

    /**
     * Set whatsapp_number
     * @param string $whatsappNumber
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setWhatsappNumber($whatsappNumber);

    /**
     * Get availability_sunday
     * @return string|null
     */
    public function getAvailabilitySunday();

    /**
     * Set availability_sunday
     * @param string $availabilitySunday
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setAvailabilitySunday($availabilitySunday);

    /**
     * Get availability_monday
     * @return string|null
     */
    public function getAvailabilityMonday();

    /**
     * Set availability_monday
     * @param string $availabilityMonday
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setAvailabilityMonday($availabilityMonday);

    /**
     * Get availability_tuesday
     * @return string|null
     */
    public function getAvailabilityTuesday();

    /**
     * Set availability_tuesday
     * @param string $availabilityTuesday
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setAvailabilityTuesday($availabilityTuesday);

    /**
     * Get availability_wednesday
     * @return string|null
     */
    public function getAvailabilityWenesday();

    /**
     * Set availability_wednesday
     * @param string $availabilityWenesday
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setAvailabilityWenesday($availabilityWenesday);

    /**
     * Get availability_thursday
     * @return string|null
     */
    public function getAvailabilityThusday();

    /**
     * Set availability_thursday
     * @param string $availabilityThusday
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setAvailabilityThusday($availabilityThusday);

    /**
     * Get availability_friday
     * @return string|null
     */
    public function getAvailabilityFriday();

    /**
     * Set availability_friday
     * @param string $availabilityFriday
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setAvailabilityFriday($availabilityFriday);

    /**
     * Get availability_saturday
     * @return string|null
     */
    public function getAvailabilitySaturday();

    /**
     * Set availability_saturday
     * @param string $availabilitySaturday
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setAvailabilitySaturday($availabilitySaturday);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get modified_at
     * @return string|null
     */
    public function getModifiedAt();

    /**
     * Set modified_at
     * @param string $modifiedAt
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setModifiedAt($modifiedAt);

    /**
     * Get created_by
     * @return string|null
     */
    public function getCreatedBy();

    /**
     * Set created_by
     * @param string $createdBy
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setCreatedBy($createdBy);

    /**
     * Get last_modified_by
     * @return string|null
     */
    public function getLastModifiedBy();

    /**
     * Set last_modified_by
     * @param string $lastModifiedBy
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setLastModifiedBy($lastModifiedBy);

    /**
     * Get avatar
     * @return string|null
     */
    public function getAvatar();

    /**
     * Set avatar
     * @param string $avatar
     * @return \NdCode\WhatsAppChatSystem\WhatsappUser\Api\Data\WhatsappUserInterface
     */
    public function setAvatar($avatar);
}

