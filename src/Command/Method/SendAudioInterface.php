<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;

/**
 * Interface SendAudioInterface
 * @package Telegram\Command\Method
 */
interface SendAudioInterface extends CommandInterface, Parts\ChatInterface
{
    /**
     * @param mixed
     *
     * @return $this
     */
    public function setAudio($audio);
}
