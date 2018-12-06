<?php

declare(strict_types = 1);

namespace Telegram\Command\Method\Parts;

/**
 * Trait ReplyToMessage
 * @package Telegram\Command\Method\Parts
 */
trait ReplyToMessage
{
    /**
     * {@inheritdoc}
     */
    public function setReplyToMessageId(int $messageId)
    {
        return $this->setData('reply_to_message_id', $messageId);
    }
}
