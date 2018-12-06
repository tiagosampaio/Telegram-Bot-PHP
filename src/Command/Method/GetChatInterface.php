<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;

/**
 * Interface GetChatInterface
 * @package Telegram\Command\Method
 */
interface GetChatInterface extends CommandInterface, Parts\ChatInterface
{
}
