<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;

/**
 * Interface SendVideoNoteInterface
 * @package Telegram\Command\Method
 */
interface SendVideoNoteInterface extends CommandInterface, Parts\ChatInterface
{
    /**
     * @param $videoNote
     * @return $this
     */
    public function setVideoNote($videoNote);
}
