<?php

declare(strict_types = 1);

namespace Telegram\Command;

use Telegram\Framework\Data\ObjectData;

/**
 * Class MethodAbstract
 * @package Telegram\Command
 */
abstract class CommandAbstract extends ObjectData implements CommandInterface
{
    /**
     * @var string
     */
    protected $urlPath = null;
    
    /**
     * @var boolean
     */
    protected $exportMultipart = false;

    /**
     * @var string
     */
    protected $contentType = 'json';
    
    /**
     * @var string
     */
    protected $requestMethod = self::REQUEST_METHOD_POST;

    /**
     * @var array
     */
    protected $optionalConfig = [];

    /**
     * @var \Telegram\Framework\Data\SerializerInterface
     */
    private $serializer;

    /**
     * MethodAbstract constructor.
     * @param \Telegram\Framework\Data\SerializerInterface $serializer
     */
    public function __construct(
        \Telegram\Framework\Data\SerializerInterface $serializer
    ) {
        $this->serializer = $serializer;
    }
    
    /**
     * @return string
     */
    public function getUrlPath()
    {
        return $this->urlPath;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }
    
    /**
     * @return string
     */
    public function getRequestMethod()
    {
        return $this->requestMethod;
    }

    /**
     * {@inheritdoc}
     */
    public function setOptionalConfig(array $optionalConfig = [])
    {
        $this->optionalConfig = $optionalConfig;
        
        /**
         * @var string $key
         * @var mixed  $value
         */
        foreach ($this->optionalConfig as $key => $value) {
            if (is_null($key) || false === $key) {
                continue;
            }
            
            $this->setData($key, $value);
        }
        
        return $this;
    }

    /**
     * @return array
     */
    public function prepareBody()
    {
        return $this->export();
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->export();
    }

    /**
     * @return string
     */
    public function toJson()
    {
        return $this->serializer->serialize($this->toArray());
    }
}
