<?php

namespace Liloi\Codex\Exceptions;

class UndefinedException extends CodexException
{
    /**
     * Exception message.
     *
     * @var string
     */
    protected $defaultMessage = 'Undefined exception.';

    /**
     * Exception code.
     *
     * @var int|string
     */
    protected $defaultCode = 0x104;
}