<?php

declare(strict_types = 1);

namespace Telegram\Framework\Http\Response;

/**
 * Class ResponseExceptionAbstract
 * @package Telegram\Framework\Http\Response
 */
abstract class ResponseExceptionAbstract extends ResponseAbstract implements ResponseExceptionInterface
{
    /**
     * @return bool
     */
    public function success()
    {
        return false;
    }
    
    /**
     * @return bool
     */
    public function exception()
    {
        return true;
    }
}
