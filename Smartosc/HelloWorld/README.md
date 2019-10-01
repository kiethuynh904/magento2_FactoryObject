# Magento2 Rina Region

A Magento 2 module that adds Italian regions (provinces). 

# Installation

Please use composer to install the extension. 

    1. Add ssh public key to your bitbucket account.
    2. At your magento root:

        * composer config repositories.rina-region git git@bitbucket.org:centraltechnology/rina-region.git
        * composer require rina/region:dev-master
        * php bin/magento module:enable Rina_Region
        * php bin/magento setup:upgrade

## Change log
* 1.0.0 - Init module