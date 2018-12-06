<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;
use Telegram\Command\Method\Parts\ChatInterface as Chat;
use Telegram\Command\Method\Parts\MessageInterface as Message;
use Telegram\Command\Method\Parts\InlineMessageInterface as InlineMessage;
use Telegram\Command\Method\Parts\ReplyMarkupInterface as ReplyMarkup;

/**
 * Interface EditMessageMediaInterface
 * @package Telegram\Command\Method
 */
interface EditMessageMediaInterface extends CommandInterface, Chat, Message, InlineMessage, ReplyMarkup
{
    /**
     * @param $media
     * @return mixed
     */
    public function setMedia($media);
}
