![Telegram](/assets/images/telegram.png)

# Telegram Bot PHP

#### The easiest way to integrate your PHP application with Telegram Bots.

Create powerful app integrations with this Telegram Bot SDK. It's as easy as incredible!!

[![Build Status](https://travis-ci.org/tiagosampaio/Telegram-Bot-PHP.svg?branch=master)](https://travis-ci.org/tiagosampaio/Telegram-Bot-PHP)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/f2d11df6b0824cb98fbd7bac12b61182)](https://www.codacy.com/app/tiagoosampaio/Telegram-Bot-PHP?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=tiagosampaio/Telegram-Bot-PHP&amp;utm_campaign=Badge_Grade)
[![Open Source Helpers](https://www.codetriage.com/tiagosampaio/telegram-bot-php/badges/users.svg)](https://www.codetriage.com/tiagosampaio/telegram-bot-php)
[![Downloads](https://poser.pugx.org/tiagosampaio/telegram-bot-php/d/total.svg)](https://packagist.org/packages/tiagosampaio/telegram-bot-php)
[![License](https://poser.pugx.org/tiagosampaio/telegram-bot-php/license.svg)](https://packagist.org/packages/tiagosampaio/telegram-bot-php)
[![Latest Stable Version](https://poser.pugx.org/tiagosampaio/telegram-bot-php/v/stable)](https://packagist.org/packages/tiagosampaio/telegram-bot-php)

See an example of how easy it is to use:

```php
<?php
    /**
     * Inject the composer's autoload file.
     */
    require_once __DIR__ . '/vendor/autoload.php';

    /**
     * Assuming you already have the token created using the BotFather.
     */
    $token = '[SOME TOKEN HASH]';
    
    /**
     * And that you have the chat ID too, you can simply define the text you'd like to send, for instance.
     */
    $chatId = [SOME CHAT ID];
    $text   = \Faker\Factory::create()->sentence(20);

    /**
     * Create and instance of the API by using the ApiFactory.
     * @var \Telegram\ApiInterface $api
     */
    $api = \Telegram\ApiFactory::create($token);
    
    /**
     * And call the proper method.
     * @var \Telegram\Service\ResultInterface $response
     */
    $response = $api->methods()->sendMessage($chatId, $text);
```

## Telegram BotFather

This link to [BotFather](https://telegram.me/BotFather) will guide you to create your Telegram Bot.

![Telegram BotFather](/assets/images/botfather.jpg)

## Authors

Tiago Sampaio - [tiago@tiagosampaio.com](mailto:tiago@tiagosampaio.com)

## License
> Telegram Bot PHP is a personal project initiated in late 2018 by Tiago Sampaio. It's free for use.

[The Open Software License 3.0 (OSL-3.0)](https://opensource.org/licenses/osl-3.0.php).

Pelase, see the file LICENSE.txt to a complete description of the OSL License.
