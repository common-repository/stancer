<?php

declare (strict_types=1);
namespace Stancer\Scoped\Isolated\Stancer\Exceptions;

use Stancer\Scoped\Isolated\Stancer\Interfaces\ExceptionInterface;
use Stancer\Scoped\Isolated\Psr;
/**
 * Exception thrown for 300 level errors.
 */
class RedirectionException extends HttpException implements ExceptionInterface
{
    /** @var string */
    protected static $defaultMessage = 'Redirection';
    /** @var string Default log level */
    protected static $logLevel = Psr\Log\LogLevel::WARNING;
    /** @var string */
    protected static $status = '3xx';
}
