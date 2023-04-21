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

namespace Seofeb\Faq\Model;

use Magento\Framework\Model\AbstractModel;
use Seofeb\Faq\Api\Data\FaqGroupInterface;
use Seofeb\Faq\Model\ResourceModel\FaqGroup as FaqGroupResourceModel;

class FaqGroup extends AbstractModel implements FaqGroupInterface
{
    /**
     * @return void
     */
    public function _construct()
    {
        $this->_init(FaqGroupResourceModel::class);
    }

    /**
     * @inheridoc
     */
    public function getFaqGroupId()
    {
        return $this->getData(self::FAQGROUP_ID);
    }

    /**
     * @inheridoc
     */
    public function setFaqGroupId($faqGroupId)
    {
        return $this->setData(self::FAQGROUP_ID, $faqGroupId);
    }

    /**
     * @inheridoc
     */
    public function getGroupName()
    {
        return $this->getData(self::GROUPNAME);
    }

    /**
     * @inheridoc
     */
    public function setGroupName($groupName)
    {
        return $this->setData(self::GROUPNAME, $groupName);
    }

    /**
     * @inheridoc
     */
    public function getIcon()
    {
        return $this->getData(self::ICON);
    }

    /**
     * @inheridoc
     */
    public function setIcon($icon)
    {
        return $this->setData(self::ICON, $icon);
    }

    /**
     * @inheridoc
     */
    public function getFaqIds()
    {
        return $this->getData(self::FAQIDS);
    }

    /**
     * @inheridoc
     */
    public function setFaqIds($faqIds)
    {
        return $this->setData(self::FAQIDS, $faqIds);
    }

    /**
     * @inheridoc
     */
    public function getSortOrder()
    {
        return $this->getData(self::SORTORDER);
    }

    /**
     * @inheridoc
     */
    public function setSortOrder($sortOrder)
    {
        return $this->setData(self::SORTORDER, $sortOrder);
    }

    /**
     * @inheridoc
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * @inheridoc
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }
}
