<?php

declare (strict_types=1);
namespace Stancer\Scoped\Isolated\Stancer\Sepa\Check;

use Stancer\Scoped\Isolated\Stancer;
/**
 * List of a sepa check status.
 */
#[Stancer\WillChange\PHP8_1\Enumeration]
class Status
{
    public const AVAILABLE = 'available';
    public const CHECK_ERROR = 'check_error';
    public const CHECK_SENT = 'check_sent';
    public const CHECKED = 'checked';
    public const UNAVAILABLE = 'unavailable';
}
