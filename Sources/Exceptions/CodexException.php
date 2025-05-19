<?php

namespace Liloi\Codex\Exceptions;

use Liloi\Judex\ExtendedException;

/**
 * Extend from {@link JudexException} for other programmers to use.
 *
 * @package Exceptions
 */
class CodexException extends ExtendedException
{
    /**
     * Exception message.
     *
     * @var string
     */
    protected $defaultMessage = 'General Codex exception.';

    /**
     * Exception code.
     *
     * @var int|string
     */
    protected $defaultCode = 0x101;
}