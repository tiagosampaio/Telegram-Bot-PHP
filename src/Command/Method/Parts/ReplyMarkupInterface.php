<?php

declare(strict_types = 1);

namespace Telegram\Command\Method\Parts;

/**
 * Class ReplyMarkupInterface
 * @package Telegram\Command\Method\Parts
 */
interface ReplyMarkupInterface
{
    /**
     * @param string $replyMarkup
     * @return $this
     */
    public function setReplyMarkup($replyMarkup);
}
