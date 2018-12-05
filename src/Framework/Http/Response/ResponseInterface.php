<?php

declare(strict_types = 1);

namespace Telegram\Framework\Http\Response;

/**
 * Interface ResponseInterface
 * @package Telegram\Framework\Http\Response
 */
interface ResponseInterface
{
    /**
     * @return bool
     */
    public function success();
    
    /**
     * @return bool
     */
    public function exception();
    
    /**
     * @return bool
     */
    public function canParse();
}
