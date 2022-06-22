# WhatsApp Chat System

    ``ndcode/module-whatsappchatsystem``

 - [Main Functionalities](#main-functionalities)
 - [Installation](#installation)
 - [Configuration](#configuration)
 - [Change Log](#chnage-log)
 - [Future Feature to add](#future-feature-to-add)


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
    - public github repository as vcs (Now Available)
 - Add the composer repository to the configuration by running `composer config repositories.NdCode_WhatsAppChatSystem vcs https://github.com/nd1996/NdCode_WhatsAppChatSystem.git`
 - Install the module composer by running `composer require ndcode/module-whatsappchatsystem`
 - enable the module by running `php bin/magento module:enable NdCode_WhatsAppChatSystem`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - enable (whatsapp_chat/general/enable)
 - effect (whatsapp_chat/general/effect)
 - if_single (whatsapp_chat/general/if_single)


## Change Log
- 2022-06-22
  - [feature] Single and multiple accounts
  - [feature] Define time availability per user
  - [feature] Let your customers see when you are offline
  - [feature] Enable/Disable User from Admin
  - [feature] Store TimeZone is use for Active user(s)
  - [feature] Few Effect added for popup


## Future Feature to add
- Display chat icon left or right on web page



