<?php

declare(strict_types = 1);

namespace Telegram\Command\Updates;

use Telegram\Command\CommandAbstract;

/**
 * Class GetWebhookInfo
 * @package Telegram\Method\Updates
 */
class DeleteWebhook extends CommandAbstract implements DeleteWebhookInterface
{
    /**
     * @var string
     */
    protected $urlPath = 'deleteWebhook';
}
