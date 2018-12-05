<?php

declare(strict_types = 1);

namespace Telegram;

use Telegram\Framework\DI\ContainerRepository;

/**
 * Class ApiFactory
 * @package Telegram
 */
class ApiFactory
{
    
    /**
     * @var \DI\Container
     */
    private static $container;
    
    /**
     * @var array
     */
    private static $config = [
        'definitions' => TELEGRAM_DIR_DI_CONFIG
    ];
    
    /**
     * @param string $token
     *
     * @return ApiInterface
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public static function create(string $token)
    {
        self::setupContainer();
        
        $api = self::createApiInstance($token);
    
        self::$container->set(Api::class, $api);
        
        return $api;
    }
    
    /**
     * @param string $token
     *
     * @return ApiInterface
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    private static function createApiInstance(string $token)
    {
        return self::$container->make(Api::class, [
            'token' => $token,
        ]);
    }
    
    /**
     * Setup the container.
     *
     * @throws \Telegram\Framework\Exception\ExceptionInterface
     */
    private static function setupContainer()
    {
        self::$container = ContainerRepository::getInstance(self::$config);
    }
}
