<?php

declare(strict_types = 1);

namespace Telegram\Command\Method\Parts;

/**
 * Class InlineMessageInterface
 * @package Telegram\Command\Method\Parts
 */
interface InlineMessageInterface
{
    /**
     * @param string $inlineMessageId
     * @return $this
     */
    public function setInlineMessageId($inlineMessageId);
}
