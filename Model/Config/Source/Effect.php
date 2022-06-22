<?php
/**
 * Copyright © Nilesh Dubey All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace NdCode\WhatsAppChatSystem\Model\Config\Source;

class Effect implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [
            ['value' => "1", 'label' => __("Fade In &amp; Scale")],
            ['value' => "2", 'label' => __("Slide In (Right)")],
            ['value' => "3", 'label' => __("Slide In (Bottom)")],
            ['value' => "4", 'label' => __("Newspaper")],
            ['value' => "5", 'label' => __("Fall")],
            ['value' => "6", 'label' => __("Side Fall")],
            ['value' => "7", 'label' => __("Rotate From Bottom")],
            ['value' => "8", 'label' => __("Rotate From Left")],
            ['value' => "9", 'label' => __("3D Flip Horizontal")],
            ['value' => "10", 'label' => __("3D Flip Vertical")],
            ['value' => "11", 'label' => __("3D Sign")],
            ['value' => "12", 'label' => __("Super Scaled")],
            ['value' => "13", 'label' => __("3D Split")]
        ];
    }

    public function toArray()
    {
        return [
            "1" => __("Fade In &amp; Scale"),
            "2" => __("Slide In (Right)"),
            "3" => __("Slide In (Bottom)"),
            "4" => __("Newspaper"),
            "5" => __("Fall"),
            "6" => __("Side Fall"),
            "7" => __("Rotate From Bottom"),
            "8" => __("Rotate From Left"),
            "9" => __("3D Flip Horizontal"),
            "10" => __("3D Flip Vertical"),
            "11" => __("3D Sign"),
            "12" => __("Super Scaled"),
            "13" => __("3D Split")
        ];
    }
}

