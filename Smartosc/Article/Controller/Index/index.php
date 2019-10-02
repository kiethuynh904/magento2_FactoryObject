<?php

namespace Smartosc\Article\Controller\Index;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
//use Smartosc\Article\Model\ArticleFactory;
use Smartosc\Article\Model\ResourceModel\Article\CollectionFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    protected $_articleCollectionFactory;

    public function __construct(Context $context, CollectionFactory $articleCollectionFactory, PageFactory $pageFactory)
    {
        $this->_articleCollectionFactory = $articleCollectionFactory;
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        echo 2;
        $collection = $this->_articleCollectionFactory->create();
        print_r($collection->getData());
        die();

//        $resultRedirect =  $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
//        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
//        $model = $this->_smArticle->create();
//        $model->addData([
//           'title'=>'Title 01',
//            'content' => 'abc',
//            'image' => 'xyz',
//            'create_at' => '',
//            'update_at' => '',
//        ]);
//        $saveData = $model->save();
//        if($saveData){
//            $this->messageManager->addSuccess( __('Insert Record Successfully !') );
//        }
//        return $resultRedirect;
    }
}