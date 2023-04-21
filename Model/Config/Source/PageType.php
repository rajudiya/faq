<?php
/**
 * MagePrince
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the seofeb.com license that is
 * available through the world-wide-web at this URL:
 * https://seofeb.com/end-user-license-agreement
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    MagePrince
 * @package     Seofeb_Faq
 * @copyright   Copyright (c) MagePrince (https://seofeb.com/)
 * @license     https://seofeb.com/end-user-license-agreement
 */

namespace Seofeb\Faq\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class PageType implements OptionSourceInterface
{
    const SCROLL = 'scroll';
    const AJAX = 'ajax';

    /**
     * Get page type
     *
     * @return array
     */
    public function toOptionArray()
    {
        return  [
            ['value' => self::SCROLL, 'label' => 'Scroll'],
            ['value' => self::AJAX, 'label' => 'Ajax']
        ];
    }
}
