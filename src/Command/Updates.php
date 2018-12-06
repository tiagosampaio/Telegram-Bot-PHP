<?php

declare(strict_types = 1);

namespace Telegram\Command;

use Telegram\ObjectType\Entity;

/**
 * Class Updates
 *
 * @package Telegram\Method
 */
class Updates implements UpdatesInterface
{
    use SendersTrait;
    
    /**
     * @var \Telegram\Service\ConnectionInterface
     */
    private $connection;
    
    /**
     * @var Updates\DeleteWebhookFactory
     */
    private $deleteWebhookFactory;
    
    /**
     * @var Updates\GetUpdatesFactory
     */
    private $getUpdatesFactory;
    
    /**
     * @var Updates\SetWebhookFactory
     */
    private $setWebhookFactory;
    
    /**
     * @var Updates\GetWebhookInfoFactory
     */
    private $getWebhookInfoFactory;
    
    /**
     * @var \Telegram\ObjectType\Entity\UpdatesFactory
     */
    private $entityUpdatesFactory;

    /**
     * Updates constructor.
     *
     * @param \Telegram\Service\ConnectionInterface $connection
     * @param \Telegram\Service\ResultFactory       $resultFactory
     * @param Updates\DeleteWebhookFactory          $deleteWebhookFactory
     * @param Updates\GetUpdatesFactory             $getUpdatesFactory
     * @param Updates\SetWebhookFactory             $setWebhookFactory
     * @param Updates\GetWebhookInfoFactory         $getWebhookInfoFactory
     * @param Entity\UpdatesFactory                 $entityUpdatesFactory
     */
    public function __construct(
        \Telegram\Service\ConnectionInterface $connection,
        \Telegram\Service\ResultFactory $resultFactory,
        Updates\DeleteWebhookFactory $deleteWebhookFactory,
        Updates\GetUpdatesFactory $getUpdatesFactory,
        Updates\SetWebhookFactory $setWebhookFactory,
        Updates\GetWebhookInfoFactory $getWebhookInfoFactory,
        Entity\UpdatesFactory $entityUpdatesFactory
    ) {
        $this->connection = $connection;
        $this->resultFactory = $resultFactory;
        $this->deleteWebhookFactory = $deleteWebhookFactory;
        $this->getUpdatesFactory = $getUpdatesFactory;
        $this->setWebhookFactory = $setWebhookFactory;
        $this->getWebhookInfoFactory = $getWebhookInfoFactory;
        $this->entityUpdatesFactory = $entityUpdatesFactory;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getUpdates(array $optionalConfig = [])
    {
        /** @var Updates\GetUpdatesInterface $object */
        $object = $this->getUpdatesFactory->create();
        return $this->post($object, Entity\UpdatesInterface::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function setWebhook(string $url, array $optionalConfig = [])
    {
        /** @var Updates\SetWebhookInterface $object */
        $object = $this->setWebhookFactory->create();
        $object->setUrl($url)
            ->setOptionalConfig($optionalConfig);
        return $this->post($object);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getWebhookInfo()
    {
        /** @var Updates\GetWebhookInfoInterface $object */
        $object = $this->getWebhookInfoFactory->create();
        return $this->post($object, Entity\WebhookInfoInterface::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function deleteWebhook()
    {
        /** @var Updates\DeleteWebhookInterface $object */
        $object = $this->deleteWebhookFactory->create();
        return $this->post($object);
    }
}
