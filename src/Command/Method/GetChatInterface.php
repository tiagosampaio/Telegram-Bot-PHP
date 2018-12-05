<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;

/**
 * Interface GetChatInterface
 * @package Telegram\Command\Method
 */
interface GetChatInterface extends CommandInterface
{
    /**
     * @param int $chatId
     *
     * @return $this
     */
    public function setChatId(int $chatId);
}
