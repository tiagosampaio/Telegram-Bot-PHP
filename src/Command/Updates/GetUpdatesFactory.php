<?php

declare(strict_types = 1);

namespace Telegram\Command\Updates;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class GetUpdatesFactory
 * @package Telegram\Command\Updates
 */
class GetUpdatesFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = GetUpdates::class;
}
