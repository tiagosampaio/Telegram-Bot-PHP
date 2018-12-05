<?php

declare(strict_types = 1);

namespace Telegram\Command\Updates;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class GetWebhookInfoFactory
 * @package Telegram\Command\Updates
 */
class GetWebhookInfoFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = GetWebhookInfo::class;
}
