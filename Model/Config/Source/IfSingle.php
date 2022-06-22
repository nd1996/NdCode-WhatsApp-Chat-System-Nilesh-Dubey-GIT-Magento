<?php
/**
 * Copyright © Nilesh Dubey All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace NdCode\WhatsAppChatSystem\Model\Config\Source;

class IfSingle implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray(): array
    {
        return [['value' => 'popup', 'label' => __('Pop Up')],['value' => 'button', 'label' => __('Button')]];
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return ['popup' => __('Pop Up'), 'button' => __('Button')];
    }
}

