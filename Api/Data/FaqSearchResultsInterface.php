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

namespace Seofeb\Faq\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface FaqSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get Faq list.
     * @return \Seofeb\Faq\Api\Data\FaqInterface[]
     */
    public function getItems();

    /**
     * Set title list.
     * @param \Seofeb\Faq\Api\Data\FaqInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
