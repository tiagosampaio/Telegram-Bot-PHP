<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class WebhookInfoFactory
 * @package Telegram\ObjectType\Entity
 */
class WebhookInfoFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = WebhookInfo::class;
}
