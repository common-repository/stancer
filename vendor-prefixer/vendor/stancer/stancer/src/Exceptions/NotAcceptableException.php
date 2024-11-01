<?php

declare (strict_types=1);
namespace Stancer\Scoped\Isolated\Stancer\Exceptions;

use Stancer\Scoped\Isolated\Stancer\Interfaces\ExceptionInterface;
use Stancer\Scoped\Isolated\Psr;
/**
 * The requested resource is capable of generating only content not acceptable according to the Accept headers.
 *
 * This represent an 406 HTTP return.
 */
class NotAcceptableException extends ClientException implements ExceptionInterface
{
    /** @var string */
    protected static $defaultMessage = 'Not Acceptable';
    /** @var string Default log level */
    protected static $logLevel = Psr\Log\LogLevel::ERROR;
    /** @var string */
    protected static $status = '406';
}
