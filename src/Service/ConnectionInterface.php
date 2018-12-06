<?php

declare(strict_types = 1);

namespace Telegram\Service;

use Telegram\Framework\Http\Response;

/**
 * Interface ConnectionInterface
 * @package Telegram\Service
 */
interface ConnectionInterface
{
    /**
     * @var string
     */
    const METHOD_POST = 'POST';
    
    /**
     * @var string
     */
    const METHOD_GET  = 'GET';

    /**
     * @return string
     */
    public function getToken();

    /**
     * @param string $token
     * @return $this
     */
    public function setToken(string $token);

    /**
     * @param string $method
     * @param string $resourcePath
     * @param array  $data
     * @param array  $config
     * @return Response\ResponseInterface
     */
    public function request($method, $resourcePath, array $data = [], array $config = []);

    /**
     * @param string $resourcePath
     * @param array  $data
     * @param array  $config
     * @return Response\ResponseInterface
     */
    public function post($resourcePath, array $data = [], array $config = []);

    /**
     * @param string $resourcePath
     * @param array  $data
     * @param array  $config
     * @return Response\ResponseInterface
     */
    public function get($resourcePath, array $data = [], array $config = []);
}
