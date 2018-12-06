<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;
use Telegram\Command\Method\Parts\ChatInterface;
use Telegram\Command\Method\Parts\ReplyMarkupInterface;
use Telegram\Command\Method\Parts\ReplyToMessageInterface;

/**
 * Interface SendMessageInterface
 * @package Telegram\Command\Method
 */
interface SendMessageInterface extends CommandInterface, ChatInterface, ReplyMarkupInterface, ReplyToMessageInterface
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
}
