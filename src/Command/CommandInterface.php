<?php

declare(strict_types = 1);

namespace Telegram\Command;

/**
 * Interface CommandInterface
 * @package Telegram\Command
 */
interface CommandInterface
{
    /**
     * @var string
     */
    const REQUEST_METHOD_GET  = 'GET';
    
    /**
     * @var string
     */
    const REQUEST_METHOD_POST = 'POST';

    /**
     * @var string
     */
    const REQUEST_METHOD_PUT = 'PUT';

    /**
     * @var string
     */
    const REQUEST_METHOD_HEAD = 'HEAD';

    /**
     * @return string
     */
    public function getUrlPath();
    
    /**
     * @return string
     */
    public function getRequestMethod();

    /**
     * @param array $optionalConfig
     * @return $this
     */
    public function setOptionalConfig(array $optionalConfig = []);

    /**
     * @return array
     */
    public function prepareBody();

    /**
     * @return array
     */
    public function toArray();

    /**
     * @return array
     */
    public function toJson();
}
