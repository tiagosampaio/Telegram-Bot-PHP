<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\Method\Parts\ChatInterface as Chat;
use Telegram\Command\Method\Parts\MessageInterface as Message;
use Telegram\Command\Method\Parts\InlineMessageInterface as InlineMessage;
use Telegram\Command\Method\Parts\ReplyMarkupInterface as ReplyMarkup;

/**
 * Interface EditMessageCaptionInterface
 * @package Telegram\Command\Method
 */
interface EditMessageCaptionInterface extends Chat, Message, InlineMessage, ReplyMarkup
{
    /**
     * @param  string $caption
     * @return $this
     */
    public function setCaption($caption);

    /**
     * @param  string $parseMode
     * @return $this
     */
    public function setParseMode($parseMode);
}
