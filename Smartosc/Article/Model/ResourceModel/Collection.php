<?php
namespace Smartosc\Article\Model\ResourceModel\SmArticle;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
    protected $_idFieldName = 'article';
    protected $_eventPrefix = 'sm_article_collection';
    protected $_eventObject = 'SmArticle_collection';
    public function _construct(){
        $this->_init("Smartosc\Article\Model\SmArticle","Smartosc\Article\Model\ResourceModel\SmArticle");
    }

}
