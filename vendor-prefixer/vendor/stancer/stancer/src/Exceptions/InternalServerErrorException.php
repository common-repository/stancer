<?php

declare (strict_types=1);
namespace Stancer\Scoped\Isolated\Stancer\Exceptions;

use Stancer\Scoped\Isolated\Stancer\Interfaces\ExceptionInterface;
use Stancer\Scoped\Isolated\Psr;
/**
 * An unexpected condition was encountered and no more specific message is suitable.
 *
 * This represent an 500 HTTP return on the API.
 */
class InternalServerErrorException extends ServerException implements ExceptionInterface
{
    /** @var string */
    protected static $defaultMessage = 'Internal Server Error';
    /** @var string Default log level */
    protected static $logLevel = Psr\Log\LogLevel::CRITICAL;
    /** @var string */
    protected static $status = '500';
    /**
     * Return default message for that kind of exception.
     *
     * @return string
     */
    public static function getDefaultMessage() : string
    {
        return 'Server error, please leave a minute to repair it and try again';
    }
}
