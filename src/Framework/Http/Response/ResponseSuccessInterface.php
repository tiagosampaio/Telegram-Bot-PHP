<?php

declare(strict_types = 1);

namespace Telegram\Framework\Http\Response;

/**
 * Interface ResponseSuccessInterface
 * @package Telegram\Framework\Http\Response
 */
interface ResponseSuccessInterface extends ResponseInterface
{
    /**
     * @return array
     */
    public function getBody();
}
