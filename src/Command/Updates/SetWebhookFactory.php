<?php

declare(strict_types = 1);

namespace Telegram\Command\Updates;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class SetWebhookFactory
 * @package Telegram\Command\Updates
 */
class SetWebhookFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = SetWebhook::class;
}
