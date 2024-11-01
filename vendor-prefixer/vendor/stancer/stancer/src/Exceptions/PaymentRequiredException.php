<?php

declare (strict_types=1);
namespace Stancer\Scoped\Isolated\Stancer\Exceptions;

use Stancer\Scoped\Isolated\Stancer\Interfaces\ExceptionInterface;
use Stancer\Scoped\Isolated\Psr;
/**
 * Indicates that the resource requested is locked and needs some payment.
 *
 * This is not used in API.
 *
 * This represent an 402 HTTP return.
 */
class PaymentRequiredException extends ClientException implements ExceptionInterface
{
    /** @var string */
    protected static $defaultMessage = 'Payment Required';
    /** @var string Default log level */
    protected static $logLevel = Psr\Log\LogLevel::ERROR;
    /** @var string */
    protected static $status = '402';
}
