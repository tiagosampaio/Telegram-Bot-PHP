<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;

/**
 * Interface SendMessageInterface
 * @package Telegram\Command\Method
 */
interface SendMessageInterface extends CommandInterface, Parts\ChatInterface
{
    /**
     * @param string $text
     * @return $this
     */
    public function setText(string $text);

    /**
     * @param mixed $mode
     * @return $this
     */
    public function setParseMode($mode);

    /**
     * @param boolean $flag
     * @return $this
     */
    public function setDisableWebPagePreview(bool $flag);

    /**
     * @param boolean $flag
     * @return $this
     */
    public function setDisableNotification(bool $flag);

    /**
     * @param int $messageId
     * @return $this
     */
    public function setReplyToMessageId(int $messageId);

    /**
     * @param mixed $markup
     * @return $this
     */
    public function setReplyMarkup($markup);
}
