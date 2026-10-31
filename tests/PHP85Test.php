<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use TomasChochola\Tooling\PhpCsFixer\Fixer\SiblingStatementSpacingFixer;
use TomasChochola\Tooling\PhpCsFixer\PHP85;

/**
 * @internal
 *
 * @no-named-arguments
 */
#[CoversClass(PHP85::class)]
#[Small()]
class PHP85Test extends TestCase
{
    #[Test()]
    public function testStrictRules(): void
    {
        $rules = PHP85::strictRules();

        self::assertSame(['syntax' => 'short'], $rules['array_syntax'] ?? null);
        self::assertTrue($rules[SiblingStatementSpacingFixer::NAME] ?? null);
    }

    #[Test()]
    public function testTomasChocholaFileHeaderRules(): void
    {
        self::assertSame([], PHP85::tomasChocholaFileHeaderRules());
    }
}
