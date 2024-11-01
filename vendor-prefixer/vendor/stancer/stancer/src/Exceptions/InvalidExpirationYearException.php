<?php

declare (strict_types=1);
namespace Stancer\Scoped\Isolated\Stancer\Exceptions;

use Stancer\Scoped\Isolated\Stancer\Interfaces\ExceptionInterface;
use Stancer\Scoped\Isolated\Psr;
/**
 * Exception thrown on miss-validation with expiration year.
 */
class InvalidExpirationYearException extends InvalidExpirationException implements ExceptionInterface
{
    /**
     * Return default message for that kind of exception.
     *
     * @return string
     */
    public static function getDefaultMessage() : string
    {
        return 'Expiration year is invalid.';
    }
}
