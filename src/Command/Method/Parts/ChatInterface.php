<?php

declare(strict_types = 1);

namespace Telegram\Command\Method\Parts;

/**
 * Class ChatInterface
 * @package Telegram\Command\Method\Parts
 */
interface ChatInterface
{
    /**
     * @param int|string $chatId
     * @return $this
     */
    public function setChatId($chatId);
}
