<?php

declare(strict_types=1);

namespace TomasChochola\Tooling\PhpCsFixer\Fixer\SiblingStatementSpacing;

/**
 * @no-named-arguments
 */
final readonly class Statement
{
    public function __construct(
        public int $visualStart,
        public int $coreStart,
        public int $coreEnd,
        public int $visualEnd,
        public string $group,
        public bool $multiline,
        public bool $coreMultiline,
        public bool $blockLike,
        public bool $hasLeadingComment,
        public bool $hasTrailingComment,
    ) {
    }
}
