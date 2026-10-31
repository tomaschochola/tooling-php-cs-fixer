<?php

declare(strict_types=1);

namespace TomasChochola\Tooling\PhpCsFixer;

use PhpCsFixer\Finder;

/**
 * @no-named-arguments
 */
final class FinderFactory
{
    private function __construct()
    {
    }

    public static function create(): Finder
    {
        return (new Finder())
            ->ignoreDotFiles(false)
            ->ignoreVCS(true)
            ->ignoreVCSIgnored(true);
    }
}
