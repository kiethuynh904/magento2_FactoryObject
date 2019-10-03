<?php

namespace Smartosc\Article\Block;

use Magento\Framework\App\Request\Http;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Result\PageFactory;
use Smartosc\Article\Model\ResourceModel\Article\CollectionFactory;

class ArticleDetail extends Template
{
    protected $_request;
    protected $_articleCollectionFactory;

    public function __construct(Context $context, Http $request,CollectionFactory $articleCollectionFactory)
    {
        $this->_articleCollectionFactory = $articleCollectionFactory;
        $this->_request = $request;
        parent::__construct($context);
    }

    public function helloDetail()
    {
        return __('hello detail');
    }

    public function getParamsUrl()
    {

    }
    public function getDetail(){
        $id = $this->_request->getParam('id');
        $articleCollection = $this->_articleCollectionFactory->create();
        $article = $articleCollection->addFieldToFilter('article_id',$id);
        return $article->getData();
    }
}