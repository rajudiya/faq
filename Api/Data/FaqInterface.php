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

interface FaqInterface
{
    const TITLE = 'title';
    const SORTORDER = 'sortorder';
    const FAQ_ID = 'faq_id';
    const CONTENT = 'content';
    const STATUS = 'status';

    /**
     * Get faq_id
     * @return int
     */
    public function getFaqId();

    /**
     * Set faq_id
     * @param int $faqId
     * @return \Seofeb\Faq\Api\Data\FaqInterface
     */
    public function setFaqId($faqId);

    /**
     * Get title
     * @return string|null
     */
    public function getTitle();

    /**
     * Set title
     * @param string $title
     * @return \Seofeb\Faq\Api\Data\FaqInterface
     */
    public function setTitle($title);

    /**
     * Get content
     * @return string|null
     */
    public function getContent();

    /**
     * Set content
     * @param string $content
     * @return \Seofeb\Faq\Api\Data\FaqInterface
     */
    public function setContent($content);

    /**
     * Get sortorder
     * @return string|null
     */
    public function getSortOrder();

    /**
     * Set sortorder
     * @param string $sortOrder
     * @return \Seofeb\Faq\Api\Data\FaqInterface
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
     * @return \Seofeb\Faq\Api\Data\FaqInterface
     */
    public function setStatus($status);
}
