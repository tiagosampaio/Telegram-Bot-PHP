# Telegram-Bot-PHP
Create powerful app integrations with this Telegram Bot SDK. It's as easy as incredible!!

[![Build Status](https://travis-ci.org/tiagosampaio/Telegram-Bot-PHP.svg?branch=master)](https://travis-ci.org/tiagosampaio/Telegram-Bot-PHP)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/885ef06d05854b0691ac6592e2667401)](https://www.codacy.com/app/tiagoosampaio/Telegram-Bot-PHP?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=tiagosampaio/Telegram-Bot-PHP&amp;utm_campaign=Badge_Grade)

See an example of how easy it is to use:

```php
<?php
    /**
     * Inject the composer's autoload file.
     */
    require_once __DIR__ . '/vendor/autoload.php';

    /**
     * Assuming you already have the token  
     */
    $token = '[SOME TOKEN HASH]';
    
    /**
     * Assuming you already have the token  
     */
    $chatId = [SOME CHAT ID];
    $text   = \Faker\Factory::create()->sentence(20);

    /** @var \Telegram\ApiInterface $api */
    $api = \Telegram\ApiFactory::create($token);
    
    /** @var \Telegram\Service\ResultInterface $response */
    $response = $api->methods()->sendMessage($chatId, $text);
```
 
## Authors

Tiago Sampaio - [tiago@tiagosampaio.com](mailto:tiago@tiagosampaio.com)

## License
> Telegram Bot PHP is a personal project initiated in late 2018 by Tiago Sampaio. It's free for use.

[The Open Software License 3.0 (OSL-3.0)](https://opensource.org/licenses/osl-3.0.php).

Pelase, see the file LICENSE.txt to a complete description of the OSL License.
