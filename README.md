# Telegram-Bot-PHP
Create powerful app integrations with this Telegram Bot SDK. It's as easy as incredible!!

See an example of how easy it is to use:

```php
<?php

    require_once __DIR__ . '/vendor/autoload.php';

    $chatId = [SOME CHAT ID];
    $token  = '[SOME TOKEN HASH]';
    $text   = \Faker\Factory::create()->sentence(20);

    /** @var \Telegram\ApiInterface $api */
    $api = \Telegram\ApiFactory::create($token);
    
    /** @var \Telegram\Service\ResultInterface $response */
    $response = $api->methods()->sendMessage($chatId, $text);
```
 
## Authors

Tiago Sampaio

## License
> Telegram Bot PHP is a personal project initiated in late 2018 by Tiago Sampaio. It's free for use.

[The Open Software License 3.0 (OSL-3.0)](https://opensource.org/licenses/osl-3.0.php).

Pelase, see the file LICENSE.txt to a complete description of the OSL License.
