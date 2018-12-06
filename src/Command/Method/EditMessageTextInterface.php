<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\Method\Parts\ChatInterface;
use Telegram\Command\Method\Parts\MessageInterface;
use Telegram\Command\Method\Parts\InlineMessageInterface;
use Telegram\Command\Method\Parts\ReplyMarkupInterface;

/**
 * Interface EditMessageTextInterface
 * @package Telegram\Command\Method
 */
interface EditMessageTextInterface extends ChatInterface, MessageInterface, InlineMessageInterface, ReplyMarkupInterface
{
}
