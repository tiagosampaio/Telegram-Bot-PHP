<?php

declare(strict_types = 1);

namespace Telegram\Command\Method\Parts;

/**
 * Class ReplyToMessageInterface
 * @package Telegram\Command\Method\Parts
 */
interface ReplyToMessageInterface
{
    /**
     * @param int $messageId
     * @return $this
     */
    public function setReplyToMessageId(int $messageId);
}
