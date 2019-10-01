<?php

namespace Smartosc\Article\Controller\Index;

use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Data\CollectionFactory;
use Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_smArticle;
    protected $resultRedirect;

    public function __construct(Context $context, CollectionFactory $_smArticle, ResultFactory $result)
    {
        $this->_smArticle = $_smArticle;
        $this->resultRedirect = $result;
        parent::__construct($context);
    }

    public function execute()
    {
        $smArticle = $this->_smArticle->create();
        $smArticle->getData();
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