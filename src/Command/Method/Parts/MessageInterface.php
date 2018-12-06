<?php

declare(strict_types = 1);

namespace Telegram\Command\Method\Parts;

/**
 * Class MessageInterface
 * @package Telegram\Command\Method\Parts
 */
interface MessageInterface
{
    /**
     * @param int $messageId
     * @return $this
     */
    public function setMessageId(int $messageId);
}
