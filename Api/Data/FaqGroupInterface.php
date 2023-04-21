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

interface FaqGroupInterface
{
    const GROUPNAME = 'groupname';
    const FAQIDS = 'faqids';
    const FAQGROUP_ID = 'faqgroup_id';
    const ICON = 'icon';
    const SORTORDER = 'sortorder';
    const STATUS = 'status';

    /**
     * Get faqgroup_id
     * @return int
     */
    public function getFaqGroupId();

    /**
     * Set faqgroup_id
     * @param int $faqGroupId
     * @return \Seofeb\Faq\Api\Data\FaqGroupInterface
     */
    public function setFaqGroupId($faqGroupId);

    /**
     * Get groupname
     * @return int|null
     */
    public function getGroupName();

    /**
     * Set groupname
     * @param string $groupName
     * @return \Seofeb\Faq\Api\Data\FaqGroupInterface
     */
    public function setGroupName($groupName);

    /**
     * Get icon
     * @return string|null
     */
    public function getIcon();

    /**
     * Set icon
     * @param string $icon
     * @return \Seofeb\Faq\Api\Data\FaqGroupInterface
     */
    public function setIcon($icon);

    /**
     * Get faq ids
     * @return string|null
     */
    public function getFaqIds();

    /**
     * Set faq ids
     * @param string $faqIds
     * @return \Seofeb\Faq\Api\Data\FaqGroupInterface
     */
    public function setFaqIds($faqIds);

    /**
     * Get sort order
     * @return string|null
     */
    public function getSortOrder();

    /**
     * Set sort order
     * @param int $sortOrder
     * @return \Seofeb\Faq\Api\Data\FaqGroupInterface
     */
    public function setSortOrder($sortOrder);

    /**
     * Get status
     * @return string|null
     */
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return \Seofeb\Faq\Api\Data\FaqGroupInterface
     */
    public function setStatus($status);
}
