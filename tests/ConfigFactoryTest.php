<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\UsesClass;
use PhpCsFixer\Finder;
use TomasChochola\Tooling\PhpCsFixer\ConfigFactory;
use TomasChochola\Tooling\PhpCsFixer\Fixer\SiblingStatementSpacingFixer;

/**
 * @internal
 *
 * @no-named-arguments
 */
#[CoversClass(ConfigFactory::class)]
#[Small()]
#[UsesClass(SiblingStatementSpacingFixer::class)]
class ConfigFactoryTest extends TestCase
{
    #[Test()]
    public function testCreatesConfiguration(): void
    {
        $finder = self::createStub(Finder::class);
        $rules = ['strict_param' => true];
        $config = ConfigFactory::create($finder, $rules);

        self::assertSame($finder, $config->getFinder());
        self::assertSame('    ', $config->getIndent());
        self::assertSame("\n", $config->getLineEnding());
        self::assertTrue($config->getRiskyAllowed());
        self::assertSame($rules, $config->getRules());
        self::assertCount(1, $config->getCustomFixers());
        self::assertContainsOnlyInstancesOf(SiblingStatementSpacingFixer::class, $config->getCustomFixers());
    }
}
