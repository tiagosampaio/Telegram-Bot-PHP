<?php

declare(strict_types = 1);

namespace Telegram\ObjectType\Entity;

use Telegram\Framework\Object\FactoryInterface;

/**
 * Class EntityFactory
 * @package Telegram\ObjectType\Entity
 */
final class EntityFactory
{
    /**
     * @var ChatFactory
     */
    private $chatFactory;

    /**
     * @var ChatPhotoFactory
     */
    private $chatPhotoFactory;

    /**
     * @var GetMeFactory
     */
    private $getMeFactory;

    /**
     * @var MessageFactory
     */
    private $messageFactory;

    /**
     * @var MessageEntityFactory
     */
    private $messageEntityFactory;

    /**
     * @var UpdateFactory
     */
    private $updateFactory;

    /**
     * @var UpdatesFactory
     */
    private $updatesFactory;

    /**
     * @var UserFactory
     */
    private $userFactory;

    /**
     * @var WebhookInfoFactory
     */
    private $webhookInfoFactory;

    public function __construct(
        ChatFactory $chatFactory,
        ChatPhotoFactory $chatPhotoFactory,
        GetMeFactory $getMeFactory,
        MessageFactory $messageFactory,
        MessageEntityFactory $messageEntityFactory,
        UpdateFactory $updateFactory,
        UpdatesFactory $updatesFactory,
        UserFactory $userFactory,
        WebhookInfoFactory $webhookInfoFactory
    ) {
        $this->chatFactory = $chatFactory;
        $this->chatPhotoFactory = $chatPhotoFactory;
        $this->getMeFactory = $getMeFactory;
        $this->messageFactory = $messageFactory;
        $this->messageEntityFactory = $messageEntityFactory;
        $this->updateFactory = $updateFactory;
        $this->updatesFactory = $updatesFactory;
        $this->userFactory = $userFactory;
        $this->webhookInfoFactory = $webhookInfoFactory;
    }

    /**
     * @param FactoryInterface $factory
     * @param array            $parameters
     * @return mixed
     */
    private function create(FactoryInterface $factory, array $parameters = [])
    {
        return $factory->create($parameters);
    }

    /**
     * @param array $parameters
     * @return ChatInterface
     */
    public function createChat(array $parameters = [])
    {
        return $this->create($this->chatFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return ChatInterface
     */
    public function createChatPhoto(array $parameters = [])
    {
        return $this->create($this->chatPhotoFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return GetMeInterface
     */
    public function createGetMe(array $parameters = [])
    {
        return $this->create($this->getMeFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return MessageInterface
     */
    public function createMessage(array $parameters = [])
    {
        return $this->create($this->messageFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return MessageEntityInterface
     */
    public function createMessageEntity(array $parameters = [])
    {
        return $this->create($this->messageEntityFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return UpdateInterface
     */
    public function createUpdate(array $parameters = [])
    {
        return $this->create($this->updateFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return UpdatesInterface
     */
    public function createUpdates(array $parameters = [])
    {
        return $this->create($this->updatesFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return UserInterface
     */
    public function createUser(array $parameters = [])
    {
        return $this->create($this->userFactory, $parameters);
    }

    /**
     * @param array $parameters
     * @return WebhookInfoInterface
     */
    public function createWebhookInfo(array $parameters = [])
    {
        return $this->create($this->webhookInfoFactory, $parameters);
    }
}
