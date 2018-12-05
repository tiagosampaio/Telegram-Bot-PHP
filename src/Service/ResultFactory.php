<?php

declare(strict_types = 1);

namespace Telegram\Service;

use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class ResultFactory
 * @package Telegram\Service
 */
class ResultFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = ResultInterface::class;
}
