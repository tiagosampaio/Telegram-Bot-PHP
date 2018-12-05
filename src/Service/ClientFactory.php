<?php

declare(strict_types = 1);

namespace Telegram\Service;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class ClientFactory
 * @package Telegram\Service
 */
class ClientFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = \GuzzleHttp\ClientInterface::class;
}
