<?php

declare (strict_types=1);
namespace Stancer\Scoped\Isolated\Stancer\Exceptions;

use Stancer\Scoped\Isolated\Stancer\Interfaces\ExceptionInterface;
use Stancer\Scoped\Isolated\Psr;
/**
 * The server timed out waiting for the request.
 *
 * This represent an 408 HTTP return on the API.
 */
class RequestTimeoutException extends ClientException implements ExceptionInterface
{
    /** @var string */
    protected static $defaultMessage = 'Request Timeout';
    /** @var string Default log level */
    protected static $logLevel = Psr\Log\LogLevel::ERROR;
    /** @var string */
    protected static $status = '408';
}
