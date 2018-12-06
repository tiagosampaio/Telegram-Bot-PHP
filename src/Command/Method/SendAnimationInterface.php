<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;

/**
 * Interface SendAnimationInterface
 * @package Telegram\Command\Method
 */
interface SendAnimationInterface extends CommandInterface, Parts\ChatInterface
{
    /**
     * @param $animation
     * @return $this
     */
    public function setAnimation($animation);
}
