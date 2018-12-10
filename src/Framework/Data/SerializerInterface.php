<?php

declare(strict_types = 1);

namespace Telegram\Framework\Data;

/**
 * Interface SerializerInterface
 * @package Telegram\Framework\Data
 */
interface SerializerInterface
{

    /**
     * @param array $data
     * @return string
     */
    public function serialize(array $data);

    /**
     * @param string $data
     * @return array
     */
    public function unserialize(string $data);
}
