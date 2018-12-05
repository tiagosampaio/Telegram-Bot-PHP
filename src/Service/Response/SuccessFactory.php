<?php

namespace Telegram\Service\Response;

use Telegram\Framework\Http\Response\ResponseSuccessInterface;
use Telegram\Framework\Object\FactoryAbstract;

/**
 * Class SuccessFactory
 * @package Telegram\Service\Response
 */
class SuccessFactory extends FactoryAbstract
{
    /**
     * @var string
     */
    protected $objectClass = ResponseSuccessInterface::class;
}
