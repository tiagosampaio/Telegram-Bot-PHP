<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;

/**
 * Interface SendAnimationInterface
 * @package Telegram\Command\Method
 */
interface SendAnimationInterface extends CommandInterface
{
    /**
     * @param string|int $chatId
     * @return $this
     */
    public function setChatId($chatId);

    /**
     * @param $animation
     * @return $this
     */
    public function setAnimation($animation);
}
