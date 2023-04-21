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

namespace Seofeb\Faq\Plugin\Magento\Backend\Model\Menu;

class Item
{
    /**
     * @param $subject
     * @param $result
     * @return string
     */
    public function afterGetUrl($subject, $result)
    {
        $menuId = $subject->getId();

        if ($menuId == 'Seofeb_Faq::faq_user_guid') {
            $result = 'https://marketplace.magento.com/media/catalog/product/prince-module-faq-2-0-12-ce/user_guides.pdf';
        }

        return $result;
    }
}
