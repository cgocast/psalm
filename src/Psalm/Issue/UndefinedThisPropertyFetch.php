<?php

declare(strict_types=1);

namespace Psalm\Issue;

final class UndefinedThisPropertyFetch extends PropertyIssue
{
    public const ERROR_LEVEL = 6;
    public const SHORTCODE = 41;
}
