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

namespace Seofeb\Faq\Controller\Adminhtml\FaqGroup;

use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\PageFactory;
use Seofeb\Faq\Model\FaqGroupRepository;

class Edit extends FaqGroup
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @var FaqGroupRepository
     */
    protected $faqGroupRepository;

    /**
     * Index constructor.
     *
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param FaqGroupRepository $faqGroupRepository
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        FaqGroupRepository $faqGroupRepository
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->faqGroupRepository = $faqGroupRepository;
        parent::__construct($context);
    }

    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Seofeb_Faq::menu');

        if ($faqGroupId = (int)$this->getRequest()->getParam('faqgroup_id')) {
            try {
                $faqGroup = $this->faqGroupRepository->getById($faqGroupId);
                $resultPage->getConfig()->getTitle()->prepend(__($faqGroup->getGroupName()));
            } catch (\Magento\Framework\Exception\NoSuchEntityException $e) {
                $this->messageManager->addErrorMessage(__('This Faq Group no longer exists.'));

                return $this->_redirect('*/*/index');
            }
        } else {
            $resultPage->getConfig()->getTitle()->prepend(__('New Faq Group'));
        }

        return $resultPage;
    }
}
