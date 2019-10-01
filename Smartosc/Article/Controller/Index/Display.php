<?php
namespace Smartosc\Article\Controller\Index;

use Magento\Framework\App\Action\Context;

/**
 * Class Display
 * @package Smartosc\Article\Controller\Index
 */
class Display extends \Magento\Framework\App\Action\Action
{
    /**
     * Display constructor.
     *
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function execute()
    {
        //Find to way get the config: smartosc_configuration/configuration/enable
        echo 'Hello Article';
        exit;
    }

}