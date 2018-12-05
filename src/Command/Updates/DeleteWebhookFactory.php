<?php

declare(strict_types = 1);

namespace Telegram\Command\Updates;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class DeleteWebhookFactory
 * @package Telegram\Command\Updates
 */
class DeleteWebhookFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = DeleteWebhook::class;
}
