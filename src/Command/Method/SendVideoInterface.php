<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;

/**
 * Interface SendVideoInterface
 * @package Telegram\Command\Method
 */
interface SendVideoInterface extends CommandInterface
{
    /**
     * @param string|int $chatId
     * @return $this
     */
    public function setChatId($chatId);

    /**
     * @param $video
     * @return $this
     */
    public function setVideo($video);
}
