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

namespace Seofeb\Faq\Block;

use Magento\Framework\View\Element\Html\Link;
use Magento\Store\Model\ScopeInterface;

class HeaderLink extends Link
{
    public function _toHtml()
    {
        $isEnable = $this->_scopeConfig->isSetFlag(
            'faqtab/general/enable',
            ScopeInterface::SCOPE_STORE
        );
        $isHeaderLinkEnable = $this->_scopeConfig->isSetFlag(
            'faqtab/design/headerlink',
            ScopeInterface::SCOPE_STORE
        );
        if (!$isEnable || !$isHeaderLinkEnable) {
            return '';
        }
        return parent::_toHtml();
    }
}
