<?php
/**
 * Copyright © Nilesh Dubey All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace NdCode\WhatsAppChatSystem\Block\Adminhtml\Whatsapp\UiForm;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Registry;

class CustomFields extends Template
{
    protected Registry $_coreRegistry;

    protected $_template = 'NdCode_WhatsAppChatSystem::whatsapp/uiform/customfields.phtml';

    /**
     * Constructor
     *
     * @param Context $context
     * @param array $data
     * @param Registry $coreRegistry
     */
    public function __construct(
        Context $context,
        Registry $coreRegistry,
        array $data = []
    ) {
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context, $data);
    }

    /**
     * @return array
     */
    public function getWeekDays(): array
    {
        return [
            "availability_sunday" => [
                "label" => "Sunday"
            ],
            "availability_monday" => [
                "label" => "Monday"
            ],
            "availability_tuesday" => [
                "label" => "Tuesday"
            ],
            "availability_wednesday" => [
                "label" => "Wednesday"
            ],
            "availability_thursday" => [
                "label" => "Thursday"
            ],
            "availability_friday" => [
                "label" => "Friday"
            ],
            "availability_saturday" => [
                "label" => "Saturday"
            ],
        ];
    }

    public function getFormData()
    {
        return $this->_coreRegistry->registry("ndcode_whatsappchatsystem_whatsapp_user");
    }
}
