<?php

declare(strict_types=1);

namespace CodingStandard\Test\Errors\Generic\CodeAnalysis\UnnecessaryFinalModifier;

final class Found
{
    final public function foo(): void
    {
    }
}
