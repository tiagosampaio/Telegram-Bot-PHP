<?php

declare(strict_types = 1);

namespace Telegram\Command;

use Telegram\Service\ResultInterface;

/**
 * Interface UpdatesInterface
 * @package Telegram\Method
 */
interface UpdatesInterface
{
    /**
     * @param array $optionalConfig
     * @return ResultInterface
     */
    public function getUpdates(array $optionalConfig = []);
    
    /**
     * @param string $url
     * @param array  $optionalConfig
     * @return ResultInterface
     */
    public function setWebhook(string $url, array $optionalConfig = []);
    
    /**
     * @return ResultInterface
     */
    public function getWebhookInfo();
    
    /**
     * @return ResultInterface
     */
    public function deleteWebhook();
}
