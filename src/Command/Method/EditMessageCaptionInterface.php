<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

/**
 * Interface EditMessageCaptionInterface
 * @package Telegram\Command\Method
 */
interface EditMessageCaptionInterface
    extends Parts\ChatInterface, Parts\MessageInterface, Parts\InlineMessageInterface, Parts\ReplyMarkupInterface
{
    /**
     * @param string $caption
     * @return $this
     */
    public function setCaption($caption);

    /**
     * @param string $parseMode
     * @return $this
     */
    public function setParseMode($parseMode);
}
