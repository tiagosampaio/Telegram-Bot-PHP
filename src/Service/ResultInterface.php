<?php

declare(strict_types = 1);

namespace Telegram\Service;

use Telegram\Framework\Http\Response;
use Telegram\ObjectType\EntityInterface;

/**
 * Interface ResultInterface
 * @package Telegram\Service
 */
interface ResultInterface
{
    /**
     * @return Response\ResponseExceptionInterface|Response\ResponseSuccessInterface
     */
    public function getResponse();
    
    /**
     * @return EntityInterface
     */
    public function parse();
}
