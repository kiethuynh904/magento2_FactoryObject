<?php
namespace Smartosc\Article\Model;
class SmArticle extends \Magento\Framework\Model\AbstractModel{
    const CACHE_TAG = 'sm_article';

    protected $_cacheTag = 'sm_article';

    protected $_eventPrefix = 'sm_article';
    public function _construct(){
        $this->_init("Smartosc\Article\Model\ResourceModel\SmArticle");
    }
    public function getIdentities(){
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
    public function getDefaultValues(){
        $value = [];
        return $value;
    }
}
