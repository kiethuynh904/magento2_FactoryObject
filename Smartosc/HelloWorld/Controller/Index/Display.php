<?php
namespace Smartosc\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Context;

/**
 * Class Display
 * @package Smartosc\HelloWorld\Controller\Index
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
        echo 'Hello World';
        exit;
    }

}