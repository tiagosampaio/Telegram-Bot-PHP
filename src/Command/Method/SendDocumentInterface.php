<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;

/**
 * Interface SendDocumentInterface
 * @package Telegram\Command\Method
 */
interface SendDocumentInterface extends CommandInterface
{
    /**
     * @param int $chatId
     *
     * @return $this
     */
    public function setChatId(int $chatId);
    
    /**
     * @param mixed
     *
     * @return $this
     */
    public function setDocument($document);
}
