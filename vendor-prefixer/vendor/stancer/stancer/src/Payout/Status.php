<?php

declare (strict_types=1);
namespace Stancer\Scoped\Isolated\Stancer\Payout;

use Stancer\Scoped\Isolated\Stancer;
/**
 * List of a payout status.
 */
#[Stancer\WillChange\PHP8_1\Enumeration]
class Status
{
    public const FAILED = 'failed';
    public const PAID = 'paid';
    public const PENDING = 'pending';
    public const SENT = 'sent';
    public const TO_PAY = 'to_pay';
}
