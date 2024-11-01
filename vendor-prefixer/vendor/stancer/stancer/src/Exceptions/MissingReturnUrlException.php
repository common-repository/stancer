<?php

declare (strict_types=1);
namespace Stancer\Scoped\Isolated\Stancer\Exceptions;

use Stancer\Scoped\Isolated\Stancer\Interfaces\ExceptionInterface;
use Stancer\Scoped\Isolated\Psr;
/**
 * Exception thrown when no return URL was setted and an operation needs it.
 */
class MissingReturnUrlException extends BadMethodCallException implements ExceptionInterface
{
    /** @var string Default log level */
    protected static $logLevel = Psr\Log\LogLevel::CRITICAL;
    /**
     * Return default message for that kind of exception.
     *
     * @return string
     */
    public static function getDefaultMessage() : string
    {
        return 'You must provide a return URL.';
    }
}
