<?php

declare(strict_types = 1);

namespace Telegram\Command\Updates;

use Telegram\Command\CommandAbstract;

/**
 * Class GetWebhookInfo
 * @package Telegram\Method\Updates
 */
class GetWebhookInfo extends CommandAbstract implements GetWebhookInfoInterface
{
    /**
     * @var string
     */
    protected $urlPath = 'getWebhookInfo';
}
