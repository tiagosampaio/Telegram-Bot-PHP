<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;

/**
 * Interface SendVoiceInterface
 * @package Telegram\Command\Method
 */
interface SendVoiceInterface extends CommandInterface
{
    /**
     * @param string|int $chatId
     * @return $this
     */
    public function setChatId($chatId);

    /**
     * @param $voice
     * @return $this
     */
    public function setVoice($voice);
}
