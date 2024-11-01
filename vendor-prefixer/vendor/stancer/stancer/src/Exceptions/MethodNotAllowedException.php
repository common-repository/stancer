<?php

declare (strict_types=1);
namespace Stancer\Scoped\Isolated\Stancer\Exceptions;

use Stancer\Scoped\Isolated\Stancer\Interfaces\ExceptionInterface;
use Stancer\Scoped\Isolated\Psr;
/**
 * A request method is not supported for the requested resource.
 *
 * This represent an 405 HTTP return on the API.
 */
class MethodNotAllowedException extends ClientException implements ExceptionInterface
{
    /** @var string */
    protected static $defaultMessage = 'Method Not Allowed';
    /** @var string Default log level */
    protected static $logLevel = Psr\Log\LogLevel::CRITICAL;
    /** @var string */
    protected static $status = '405';
}
