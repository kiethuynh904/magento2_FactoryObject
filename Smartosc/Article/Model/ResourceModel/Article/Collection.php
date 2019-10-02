<?php

namespace Smartosc\Article\Model\ResourceModel\Article;
use Smartosc\Article\Model\Article;
use Smartosc\Article\Model\ResourceModel\Article as ResourceModelArticle;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    public function _construct()
    {
//        $this->_init("Smartosc\Article\Model\Article", "Smartosc\Article\Model\ResourceModel\Article");
        $this->_init(Article::class,ResourceModelArticle::class);
    }

}
