<?php

namespace Liloi\Codex\Exceptions;

class AccessException extends CodexException
{
    /**
     * Exception message.
     *
     * @var string
     */
    protected $defaultMessage = 'Access denied exception.';

    /**
     * Exception code.
     *
     * @var int|string
     */
    protected $defaultCode = 0x102;
}