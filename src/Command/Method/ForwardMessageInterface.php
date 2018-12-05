<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;

/**
 * Interface ForwardMessageInterface
 *
 * @package Telegram\Command\Method
 */
interface ForwardMessageInterface extends CommandInterface
{
    /**
     * @param int $chatId
     *
     * @return $this
     */
    public function setChatId(int $chatId);
    
    /**
     * @param int $chatId
     *
     * @return $this
     */
    public function setFromChatId(int $chatId);
    
    /**
     * @param int $messageId
     *
     * @return $this
     */
    public function setMessageId(int $messageId);
    
    /**
     * @param boolean $flag
     *
     * @return $this
     */
    public function setDisableNotification(bool $flag);
}
