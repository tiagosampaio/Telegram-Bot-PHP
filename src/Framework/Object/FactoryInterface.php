<?php

declare(strict_types = 1);

namespace Telegram\Framework\Object;

/**
 * Interface FactoryInterface
 * @package Telegram\Framework\Object
 */
interface FactoryInterface
{
    /**
     * @param array $parameters
     * @return mixed
     */
    public function create(array $parameters = []);
}
