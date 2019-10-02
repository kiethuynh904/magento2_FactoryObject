<?php

namespace Smartosc\Article\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\Context;

class Article extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function _construct()
    {
        $this->_init("sm_article", "article_id");
    }
}
