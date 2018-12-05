<?php

declare(strict_types = 1);

namespace Telegram\Command;

use Telegram\Service\ResultInterface;
use Telegram\Framework\Http\Response\ResponseInterface;

/**
 * Trait SendersTrait
 * @package Telegram\Command
 */
trait SendersTrait
{
    /**
     * @var \Telegram\Service\ConnectionInterface
     */
    private $connection;
    
    /**
     * @var \Telegram\Service\ResultFactory
     */
    private $resultFactory;
    
    /**
     * SendersTrait constructor.
     * @param \Telegram\Service\ResultFactory $resultFactory
     */
    public function __construct(
        \Telegram\Service\ConnectionInterface $connection,
        \Telegram\Service\ResultFactory $resultFactory
    ) {
        $this->connection = $connection;
        $this->resultFactory = $resultFactory;
    }
    
    /**
     * @param CommandInterface $object
     * @param string           $objectTypeClass
     * @param array            $config
     * @return ResultInterface
     */
    private function post(CommandInterface $object, $objectTypeClass = null, array $config = [])
    {
        /** @var ResponseInterface $response */
        $response = $this->connection->post($object->getUrlPath(), $object->toArray(), $config);
        return $this->prepareResult($response, $objectTypeClass);
    }
    
    /**
     * @param CommandInterface $object
     * @param string           $objectTypeClass
     * @param array            $config
     * @return ResultInterface
     */
    private function get(CommandInterface $object, $objectTypeClass = null, array $config = [])
    {
        /** @var ResponseInterface $response */
        $response = $this->connection->get($object->getUrlPath(), $object->toArray(), $config);
        return $this->prepareResult($response, $objectTypeClass);
    }
    
    /**
     * @param ResponseInterface $response
     * @param string            $objectTypeClass
     *
     * @return ResultInterface
     */
    private function prepareResult(ResponseInterface $response, $objectTypeClass = null)
    {
        /** @var ResultInterface $result */
        $result = $this->resultFactory->create([
           'response' => $response,
           'objectTypeClass' => $objectTypeClass
        ]);
    
        return $result;
    }
}
