<?php

declare(strict_types = 1);

namespace Telegram;

/**
 * Class Api
 * @package Telegram
 */
class Api implements ApiInterface
{
    /**
     * @var string
     */
    private $token;

    /**
     * @var \Telegram\Service\ConnectionInterface
     */
    private $connection;
    
    /**
     * @var Command\UpdatesInterface
     */
    private $updates;
    
    /**
     * @var Command\MethodInterface
     */
    private $method;
    
    /**
     * Api constructor.
     *
     * @param Service\ConnectionInterface $connection
     * @param Command\UpdatesInterface    $updates
     * @param Command\MethodInterface     $method
     * @param string                      $token
     */
    public function __construct(
        Service\ConnectionInterface $connection,
        Command\UpdatesInterface $updates,
        Command\MethodInterface $method,
        string $token
    ) {
        $this->token = $token;
        $this->connection = $connection;
        $this->updates = $updates;
        $this->method = $method;

        /** Set the token. */
        $this->connection->setToken($this->getToken());
    }
    
    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
    
    /**
     * {@inheritdoc}
     */
    public function updates()
    {
        return $this->updates;
    }
    
    /**
     * {@inheritdoc}
     */
    public function methods()
    {
        return $this->method;
    }
}
