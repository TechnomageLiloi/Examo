<?php

namespace Liloi\Examo\Exceptions;

class NotFoundException extends ExamoException
{
    /**
     * Exception message.
     *
     * @var string
     */
    protected $defaultMessage = 'Not found exception.';

    /**
     * Exception code.
     *
     * @var int|string
     */
    protected $defaultCode = 0x106;
}