<?php

declare(strict_types = 1);

namespace Telegram\Command\Method\Parts;

/**
 * Trait Message
 * @package Telegram\Command\Method\Parts
 */
trait Message
{
    /**
     * @param int $messageId
     * @return $this
     */
    public function setMessageId(int $messageId)
    {
        return $this->setData('message_id', $messageId);
    }
}
