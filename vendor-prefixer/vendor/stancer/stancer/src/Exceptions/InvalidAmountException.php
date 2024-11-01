<?php

declare (strict_types=1);
namespace Stancer\Scoped\Isolated\Stancer\Exceptions;

use Stancer\Scoped\Isolated\Stancer\Interfaces\ExceptionInterface;
use Stancer\Scoped\Isolated\Psr;
/**
 * Exception thrown on invalid amount.
 */
class InvalidAmountException extends InvalidArgumentException implements ExceptionInterface
{
    /** @var string Default log level */
    protected static $logLevel = Psr\Log\LogLevel::DEBUG;
    /**
     * Return default message for that kind of exception.
     *
     * @return string
     */
    public static function getDefaultMessage() : string
    {
        return 'Amount must be greater than or equal to 50.';
    }
}
