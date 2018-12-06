<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;

/**
 * Interface DeleteMessageInterface
 * @package Telegram\Command\Method
 */
interface DeleteMessageInterface extends CommandInterface, Parts\ChatInterface, Parts\MessageInterface
{
}
