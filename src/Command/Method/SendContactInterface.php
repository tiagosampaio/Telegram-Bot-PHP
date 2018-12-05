<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandInterface;

/**
 * Interface SendContactInterface
 * @package Telegram\Command\Method
 */
interface SendContactInterface extends CommandInterface
{
    /**
     * @param string|int $chatId
     * @return $this
     */
    public function setChatId($chatId);

    /**
     * @param $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber);

    /**
     * @param $firstName
     * @return $this
     */
    public function setFirstName($firstName);
}
