<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandAbstract;

/**
 * Class GetMe
 * @package Telegram\Command\Method
 */
class GetMe extends CommandAbstract implements GetMeInterface
{
    /**
     * @var string
     */
    protected $urlPath = 'getMe';
}
