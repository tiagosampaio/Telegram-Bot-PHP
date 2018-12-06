<?php

declare(strict_types = 1);

namespace Telegram\Command\Method\Parts;

/**
 * Trait InlineMessage
 * @package Telegram\Command\Method\Parts
 */
trait InlineMessage
{
    /**
     * {@inheritdoc}
     */
    public function setInlineMessageId($inlineMessageId)
    {
        return $this->setData('inline_message_id', $inlineMessageId);
    }
}
