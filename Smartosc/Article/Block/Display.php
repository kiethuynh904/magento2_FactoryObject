<?php

namespace Smartosc\Article\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Result\PageFactory;
use Smartosc\Article\Model\ResourceModel\Article\CollectionFactory;

class Display extends Template
{
    protected $_pageFactory;
    protected $_articleCollectionFactory;

    public function __construct(Context $context, PageFactory $pageFactory, CollectionFactory $articleCollectionFactory)
    {
//        $this->_pageFactory = $pageFactory;
        $this->_articleCollectionFactory = $articleCollectionFactory;
        parent::__construct($context);
    }

    public function getArticle()
    {
        $limit = ($this->getRequest()->getParam('limit')) ? $this->getRequest()->getParam('limit') : 5;
        $page = ($this->getRequest()->getParam('p')) ? $this->getRequest()->getParam('p') : 1;

        $articleCollection = $this->_articleCollectionFactory->create();
        $articleCollection->setPageSize($limit);
        $articleCollection->setCurPage($page);
        return $articleCollection;
    }

    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        $this->pageConfig->getTitle()->set(__('Article'));

        if ($this->getArticle()) {
            $pager = $this->getLayout()->createBlock(
                'Magento\Theme\Block\Html\Pager',
                'smartosc.article'
            )
                ->setAvailableLimit([5 => 5, 10 => 10, 15 => 15])
                ->setShowPerPage(true)
                ->setCollection($this->getArticle());

            $this->setChild('pager', $pager);
            $this->getArticle()->load();
        }

        return $this;
    }

    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }
}