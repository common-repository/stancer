<?php

declare (strict_types=1);
namespace Stancer\Scoped\Isolated\Stancer\Exceptions;

use Stancer\Scoped\Isolated\Stancer\Interfaces\ExceptionInterface;
use Stancer\Scoped\Isolated\Psr;
/**
 * Exception thrown when too many redirects are followed.
 *
 * This represent an 310 HTTP return on the API.
 */
class TooManyRedirectsException extends RedirectionException implements ExceptionInterface
{
    /** @var string */
    protected static $defaultMessage = 'Too Many Redirection';
    /** @var string Default log level */
    protected static $logLevel = Psr\Log\LogLevel::CRITICAL;
    /** @var string */
    protected static $status = '310';
}
