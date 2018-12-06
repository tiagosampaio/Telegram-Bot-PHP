<?php

declare(strict_types = 1);

namespace Telegram\Command\Method;

use Telegram\Command\CommandAbstract;

/**
 * Class DeleteMessage
 * @package Telegram\Command\Method
 */
class DeleteMessage extends CommandAbstract implements DeleteMessageInterface
{
    use Parts\Chat,
        Parts\Message;

    /**
     * @var string
     */
    protected $urlPath = 'deleteMessage';
}
