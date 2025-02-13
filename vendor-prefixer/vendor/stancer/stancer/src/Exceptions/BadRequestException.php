<?php

declare (strict_types=1);
namespace Stancer\Scoped\Isolated\Stancer\Exceptions;

use Stancer\Scoped\Isolated\Stancer\Interfaces\ExceptionInterface;
use Stancer\Scoped\Isolated\Psr;
/**
 * The server cannot or will not process the request due to something that is perceived to be a client error.
 *
 * This represent an 400 HTTP return on the API.
 */
class BadRequestException extends ClientException implements ExceptionInterface
{
    /** @var string */
    protected static $defaultMessage = 'Bad Request';
    /** @var string Default log level */
    protected static $logLevel = Psr\Log\LogLevel::CRITICAL;
    /** @var string */
    protected static $status = '400';
}
