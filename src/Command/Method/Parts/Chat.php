<?php

declare(strict_types = 1);

namespace Telegram\Command\Method\Parts;

/**
 * Trait Chat
 * @package Telegram\Command\Method\Parts
 */
trait Chat
{
    /**
     * @param int|string $chatId
     * @return $this
     */
    public function setChatId($chatId)
    {
        return $this->setData('chat_id', $chatId);
    }
}
