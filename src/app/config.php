<?php

declare(strict_types = 1);

use function \DI\autowire;
use Telegram\ObjectType\Entity;
use Telegram\Framework;
use Telegram\Service;
use Telegram\Command;
use Telegram\Command\Method;
use Telegram\Command\Updates;

return [
    /** Api Object */
    \Telegram\ApiInterface::class => autowire(\Telegram\Api::class),
    
    /** Entity Objects */
    Entity\MessageInterface::class => autowire(Entity\Message::class),
    Entity\MessageEntityInterface::class => autowire(Entity\MessageEntity::class),
    Entity\UserInterface::class => autowire(Entity\User::class),
    Entity\ChatInterface::class => autowire(Entity\Chat::class),
    Entity\UpdateInterface::class => autowire(Entity\Update::class),
    Entity\UpdatesInterface::class => autowire(Entity\Updates::class),
    Entity\ChatPhotoInterface::class => autowire(Entity\ChatPhoto::class),
    Entity\GetMeInterface::class => autowire(Entity\GetMe::class),
    Entity\WebhookInfoInterface::class => autowire(Entity\WebhookInfo::class),
    
    /** Method Objects */
    Method\SendMessageInterface::class => autowire(Method\SendMessage::class),
    Method\GetMeInterface::class => autowire(Method\GetMe::class),
    Method\SendPhotoInterface::class => autowire(Method\SendPhoto::class),
    Method\SendVideoInterface::class => autowire(Method\SendVideo::class),
    Method\SendAudioInterface::class => autowire(Method\SendAudio::class),
    Method\SendDocumentInterface::class => autowire(Method\SendDocument::class),
    Method\SendAnimationInterface::class => autowire(Method\SendAnimation::class),
    Method\SendVoiceInterface::class => autowire(Method\SendVoice::class),
    Method\SendVideoNoteInterface::class => autowire(Method\SendVideoNote::class),
    Method\SendContactInterface::class => autowire(Method\SendContact::class),
    Method\ForwardMessageInterface::class => autowire(Method\ForwardMessage::class),
    
    /** Updates */
    Command\UpdatesInterface::class => autowire(Command\Updates::class),
    Command\MethodInterface::class => autowire(Command\Method::class),
    Updates\DeleteWebhookInterface::class => Updates\DeleteWebhook::class,
    Updates\GetUpdatesInterface::class => Updates\GetUpdates::class,
    Updates\GetWebhookInfoInterface::class => Updates\GetWebhookInfo::class,
    Updates\SetWebhookInterface::class => Updates\SetWebhook::class,

    /** Service Objects */
    Service\ConnectionInterface::class => autowire(Service\Connection::class),
    Service\ResultInterface::class => autowire(Service\Result::class),
    Framework\Http\Response\ResponseSuccessInterface::class => autowire(Service\Response\Success::class),
    Framework\Http\Response\ResponseExceptionInterface::class => autowire(Service\Response\Exception::class),
    
    /** Framework Objects */
    Framework\Data\SerializerInterface::class => autowire(Framework\Data\Serializer::class),
    Framework\Data\ObjectDataInterface::class => autowire(Framework\Data\ObjectData::class),
    
    /** Other Objects */
    \GuzzleHttp\ClientInterface::class => autowire(\GuzzleHttp\Client::class),
];
