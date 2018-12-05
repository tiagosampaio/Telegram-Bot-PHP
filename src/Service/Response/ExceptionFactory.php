<?php

namespace Telegram\Service\Response;

use Telegram\Framework\Http\Response\ResponseExceptionInterface;
use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class ExceptionFactory
 * @package Telegram\Service\Response
 */
class ExceptionFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = ResponseExceptionInterface::class;
}
