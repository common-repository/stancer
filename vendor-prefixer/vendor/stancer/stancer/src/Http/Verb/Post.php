<?php

declare (strict_types=1);
namespace Stancer\Scoped\Isolated\Stancer\Http\Verb;

/**
 * HTTP POST.
 */
class Post extends AbstractVerb
{
    /** @var boolean */
    protected $isAllowed = \true;
}
