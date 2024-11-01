<?php

declare (strict_types=1);
namespace Stancer\Scoped\Isolated\Stancer\Exceptions;

use Stancer\Scoped\Isolated\Stancer\Interfaces\ExceptionInterface;
use Stancer\Scoped\Isolated\Psr;
/**
 * The client must first authenticate itself with a proxy.
 *
 * This represent an 407 HTTP return.
 */
class ProxyAuthenticationRequiredException extends ClientException implements ExceptionInterface
{
    /** @var string */
    protected static $defaultMessage = 'Proxy Authentication Required';
    /** @var string Default log level */
    protected static $logLevel = Psr\Log\LogLevel::ERROR;
    /** @var string */
    protected static $status = '407';
}
