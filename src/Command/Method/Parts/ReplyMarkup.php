<?php

declare(strict_types = 1);

namespace Telegram\Command\Method\Parts;

/**
 * Trait ReplyMarkup
 * @package Telegram\Command\Method\Parts
 */
trait ReplyMarkup
{
    /**
     * {@inheritdoc}
     */
    public function setReplyMarkup($replyMarkup)
    {
        return $this->setData('reply_markup', $replyMarkup);
    }
}
