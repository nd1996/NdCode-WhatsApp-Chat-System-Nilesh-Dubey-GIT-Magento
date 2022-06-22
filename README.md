# WhatsApp Chat System

    ``ndcode/module-whatsappchatsystem``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Easy to use and use on you own risk

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/NdCode`
 - Enable the module by running `php bin/magento module:enable NdCode_WhatsAppChatSystem`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require ndcode/module-whatsappchatsystem`
 - enable the module by running `php bin/magento module:enable NdCode_WhatsAppChatSystem`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - enable (whatsapp_chat/general/enable)

 - effect (whatsapp_chat/general/effect)

 - if_single (whatsapp_chat/general/if_single)


## Specifications

 - Model
	- Whatsapp_User


## Attributes



