<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;

/**
 * Interface ForwardMessageInterface
 *
 * @package Telegram\Command\Method
 */
interface ForwardMessageInterface extends CommandInterface, Parts\ChatInterface, Parts\MessageInterface
{
    /**
     * @param int $chatId
     *
     * @return $this
     */
    public function setFromChatId(int $chatId);
    
    /**
     * @param boolean $flag
     *
     * @return $this
     */
    public function setDisableNotification(bool $flag);
}
