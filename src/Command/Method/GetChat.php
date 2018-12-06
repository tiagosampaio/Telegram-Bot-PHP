<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandAbstract;

/**
 * Class GetChat
 * @package Telegram\Command\Method
 */
class GetChat extends CommandAbstract implements GetChatInterface
{
    use Parts\Chat;

    /**
     * @var string
     */
    protected $urlPath = 'getChat';
}
