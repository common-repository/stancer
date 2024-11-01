<?php

declare (strict_types=1);
namespace Stancer\Scoped\Isolated\Stancer\Exceptions;

use Stancer\Scoped\Isolated\Stancer\Interfaces\ExceptionInterface;
use Stancer\Scoped\Isolated\Psr;
/**
 * The request has not been applied because it lacks valid authentication credentials.
 *
 * This represent an 401 HTTP return on the API.
 */
class NotAuthorizedException extends ClientException implements ExceptionInterface
{
    /** @var string */
    protected static $defaultMessage = 'Unauthorized';
    /** @var string Default log level */
    protected static $logLevel = Psr\Log\LogLevel::CRITICAL;
    /** @var string */
    protected static $status = '401';
    /**
     * Return default message for that kind of exception.
     *
     * @return string
     */
    public static function getDefaultMessage() : string
    {
        return 'You are not authorized to access that resource.';
    }
}
