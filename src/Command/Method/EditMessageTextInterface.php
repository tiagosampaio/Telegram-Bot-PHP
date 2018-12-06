<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

/**
 * Interface EditMessageTextInterface
 * @package Telegram\Command\Method
 */
interface EditMessageTextInterface extends Parts\ChatInterface, Parts\MessageInterface
{
    /**
     * @param string $inlineMessageId
     *
     * @return $this
     */
    public function setInlineMessageId($inlineMessageId);

    /**
     * @param $replyMarkup
     *
     * @return $this
     */
    public function setReplyMarkup($replyMarkup);
}
