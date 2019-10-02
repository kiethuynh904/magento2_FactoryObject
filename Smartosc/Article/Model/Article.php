<?php

namespace Smartosc\Article\Model;
class Article extends \Magento\Framework\Model\AbstractModel
{

    public function _construct()
    {
        $this->_init("Smartosc\Article\Model\ResourceModel\Article");
    }
}
