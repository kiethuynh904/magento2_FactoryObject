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

    public function __construct(Context $context,PageFactory $pageFactory,CollectionFactory $articleCollectionFactory)
    {
//        $this->_pageFactory = $pageFactory;
        $this->_articleCollectionFactory = $articleCollectionFactory;
        parent::__construct($context);
    }

    public function getArticle()
    {
        $articleCollection = $this->_articleCollectionFactory->create();
        return $articleCollection->getData();
    }

    public function sayHello(){
        return __('hello');
    }
}